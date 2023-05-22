<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
  
  
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Add_to_cart;
  
class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  

    public function addToCart_a(Request $request)
    {
        $id= $request->id;
        $product = Product::findOrFail($id);
        // return $request;

        $user_id= $_SERVER['REMOTE_ADDR'];
        // return $user_id;
        $check_id = Add_to_cart:: where('unique_id',$user_id)->first();
       
        
        //   return $product;
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']=$request->quantity +  $cart[$request->id]['quantity'];
        } else {
            $cart[$id] = [
                "ids"=>$request->id,
                "name" => $product->name,
                "name_ar" => $product->name_ar,
                "quantity" => $request->quantity,
                "price" => $request->price,
                "image" => $product->image
            ];
            if(!$check_id){
               
                $add_to_cart=new Add_to_cart();
                $add_to_cart->name =$product->name;
             
                $t=time();
                $add_to_cart->unique_id  =$user_id.'productid='.$id.$t;
                $add_to_cart->save();
           
            }
            
         

        }
          
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        // return $slug;
        $product = Product::findOrFail($id);
        $user_id= $_SERVER['REMOTE_ADDR'];
        // $Month = 2592000 + time();
        $check_id = Add_to_cart:: where('unique_id',$user_id)->first();
       
        if($product->on_sale=='1'){
            $cart = session()->get('cart', []);

            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "ids" => $product->id,
                    "name_ar" => $product->name_ar,
                    "quantity" => 1,
                    "price" => $product->sale_price,
                    "image" => $product->image
                    
                ];
                if(!$check_id){
                    $add_to_cart=new Add_to_cart();
    
                    $add_to_cart->name =$product->name;
                    $add_to_cart->unique_id  =$user_id.'productid='.$id;
                    $add_to_cart->save();
                }
             
    
            }
        }
        else{
            $cart = session()->get('cart', []);

            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "ids" => $product->id,
                    "name_ar" => $product->name_ar,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image
                    
                ];
                if(!$check_id){
                    $add_to_cart=new Add_to_cart();
    
                    $add_to_cart->name =$product->name;
                    $add_to_cart->unique_id  =$user_id.'productid='.$id;
                    $add_to_cart->save();
                }
             
    
            }
        }
        //   return $product;
       
          
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        $cart = session()->get('cart');
        if($request->id && $request->quantity ){
            
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
       
       
        
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}