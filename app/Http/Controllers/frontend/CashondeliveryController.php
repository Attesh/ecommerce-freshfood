<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
  
use Illuminate\Http\Request;
use App\Models\Credit_card_detail;
use App\Models\Order_billing_address;
use App\Models\Orders;
use App\Models\Order_detail;
use App\Models\Ordershippingaddress;
use DB;
use App\Models\Product;
class CashondeliveryController extends Controller
{
   public function store(Request $request){

    
$data=new Credit_card_detail();
$data ->card_number=null;
$data ->card_cvc=null;
$data ->card_expiry=null;
$data ->card_type='Cashondelivery';
$data->save();
$data->id;

$order=new Orders();

$order->order_date = carbon::now();

$order ->order_type='shop';

$order ->customer_id=Auth::guard('member')->user()->id;

$order ->payment_option='cash';


// $order ->card_number_id=$data->id;
$order ->ship_to='customer';

$order ->status='incomplete';
$order ->payment_status='pending';
$order ->shipping_status='pending';
$order ->order_status='pending';
$order ->corder_status='pending';

$order ->order_total=$request->total_price;

$order ->payment_received='0';
$order ->insurance_amount='0';
$order ->tax_amount='0';
$order ->shipping_amount='0';
$order ->discount_amount='0';
$order ->tax_exempt='0';

// $order ->transaction_id=$request->card_number;
$order->save();

$order->id;
$last_id=$order->id;



foreach(session('cart') as $id => $details)
{

    $name=array();
    $name=$details['name'];
    $price=array();
    $price=$details['price'];
    $quantity=array();
    $quantity=$details['quantity'];
    $subtotal=array();
    $subtotal=$price*$quantity;
    // $name = ($details['price']);
//  echo $details['name'];
 Order_detail::create([
    'order_id'=>$last_id,
    'item_id'=>$details['ids'],
    'item_quantity'=>$details['quantity'],
    'item_price'=>$details['price'],
    'subtotal'=>$details['price']*$details['quantity'],
    'sale_type'=>'full',

 ]);
 
 $product=DB::table('product')->where('id',$details['ids'])->first();
 if($product){
    
    $data= Product::findOrFail($product->id);
    $Quantity= $product->Quantity;
    $data->Quantity = $Quantity - $details['quantity'];
    $data->save();
 }
 
}
$billing=new Order_billing_address();
$billing ->order_id=$last_id;
$billing ->first_name=$request->billing_name;
$billing ->email=$request->billing_email;
$billing ->phone=$request->billing_phone;
$billing ->street_address=$request->billing_address;
$billing->save();


$shipping =new Ordershippingaddress();
$shipping ->order_id=$last_id;
$shipping ->first_name=$request->shipping_name;
$shipping ->last_name=$request->shipping_name;
$shipping ->email=$request->shipping_email;
$shipping ->street_address=$request->shipping_address;
$shipping ->phone=$request->shipping_phone;
$shipping->save();

$order_date = carbon::now();
$status='incomplete';
$billing_address=$request->billing_address;
$street_address=$request->shipping_address;
$type='Cash';
// $GET_details = Order_detail::first();
// $GET_details['item_quantity'] ;
$getVat=DB::table('settings')->first();
				$vat=$getVat->vat;
                              $vatamount=$subtotal*$vat/100;
                              $grandtotal=$subtotal+$vatamount;

$data = ['email' => Auth::guard('member')->user()->email,'orderid'=>$last_id,'order_date'=>$order_date,'status'=>$status,'first_name'=> Auth::guard('member')->user()->first_name,'last_name'=> Auth::guard('member')->user()->last_name,'phone'=>Auth::guard('member')->user()->phone,'street_address'=>$street_address,'billing_address'=>$billing_address,'type'=>$type,'name'=>$name,'price'=>$price,'quantity'=>$quantity,'subtotal'=>$subtotal,'vatamount'=>$vatamount,'grandtotal'=>$grandtotal];
Mail::send('new-invioce', ["data1" => $data], function ($messages) use ($request) {
    $messages->to(Auth::guard('member')->user()->email);
    $messages->subject('News_Letter');
});

$request->session()->forget('cart');
      return response()->json([
         "status" => true, 
         
     ]);




// Stripe::setApiKey(env('STRIPE_SECRET_KEY'));


}
}