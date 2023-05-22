<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\SubmittedContact;
use App\Models\HowItWorks;
use App\Models\Blogs;
use App\Models\BlogsDetails;
use App\Models\AboutUS;
use App\Models\AboutUsFeatures;
use App\Models\HomeSlider;
use App\Models\Features;
use App\Models\Product;
use App\Models\FeaturesDetails;
use App\Models\CMS;
use App\Models\Blog_comments;
use App\Models\Reply_comments;
use App\Models\DeliveryArea;
use DB;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    
    public function index()
    {
      $promotion=DB::table('product')->where('promotion','1')->get();
      $area=DeliveryArea::all();
      $features=CMS::where('slug','features')->first();
      $deal=Product::where('deal','1')
      ->where('on_sale','1')
      ->first();
      //$features=AboutUsFeatures::where('aboutus_id',$id)->get();
      //$features_details=DB::table('pages')->where('page_slug','features')->first();

      $details=DB::table('pages')->where('page_slug','how-it-works')->first();
      $work=HowItWorks::all();
      $sale_products=DB::table('product')->where('on_sale','1')->skip(0)->take(4)->get();
      $testimonials=DB::table('testimonials')->get();
      $latest=Product::orderBy('id','DESC')->skip(0)->take(4)->get();
      $topRated=Product::orderBy('id','ASC')->skip(0)->take(6)->get();
      $review=Product::orderBy('id','ASC')->skip(3)->take(7)->get();
      // $features=Features::first();
      // $id=$features->id;
      //$features_details=FeaturesDetails::where('features_id',$id)->get();
      $features_record=DB::table('pages')->where('page_slug','features')->first();
      $slider=DB::table('sliders')->get();
      // $slider=HomeSlider::all();
      $category=DB::table('categories')->get();
      $blogs=Blogs::all();
      return view('frontend.index',compact('review','topRated','promotion','deal','area','blogs','category','slider','features','latest','testimonials','sale_products','work','details','features_record'));
    } 
    public function About()
    {
      $about_cms=CMS::where('slug','features')->first();
      $about=AboutUS::first();
      $id=$about->id;
      $features=AboutUsFeatures::where('aboutus_id',$id)->get();
      $details=DB::table('pages')->where('page_slug','about-us')->first();
      return view('frontend.about',compact('about','features','details','about_cms'));
    }
    
    public function Blog()
    {
      return view('frontend.blog');
    }
    public function Cart()
    {
      return view('frontend.cart');
    }
    public function Checkout()
    {
      return view('frontend.checkout');
    }
    public function Contact_Us()
    {
        $contact=Settings::first();
        $details=DB::table('pages')->where('page_slug','contact-us')->first();
         return view('frontend.contact_us',compact('contact','details'));
    }
    public function Contact_Us_index(Request $request)
    {
      $request->validate([
        'email' => 'required',
        
        ]);
        $contact=new SubmittedContact();
        $contact ->name=$request->input('name');
        $contact ->email=$request->input('email');
        $contact ->subject=$request->input('subject');
        $contact ->message=$request->input('message');
        $contact ->save();
        return redirect()->back()->with('success', 'message has been sent successfully!' ,'errors','PLease all field are required');
        }
            public function Delivery_Area()
    {
      $record='';
      return view('frontend.deliveryarea',compact('record'));
    }
    public function Delivery_Area_search(Request $request)
    {
      $record=DeliveryArea::where('zipcode',$request->zipcode)->first();
      return view('frontend.deliveryarea',compact('record'));

      }
    public function Blog_Detail($slug)
    {
      $details=DB::table('blogs')->where('slug',$slug)->first();
      $detaols_id =$details->id;
  

  $details_comm = DB::table('blog_comments')
        ->select('users.*', 'blog_comments.*')
        ->leftjoin('users', 'blog_comments.user_id', '=', 'users.id')
        ->where('blog_comments.comment_id', NUll)
        ->where('blog_comments.blog_id', $detaols_id)
        ->get();
        foreach ($details_comm as $key => $value) {
        
          $details_comm[$key]->reply=DB::table('blog_comments')
          ->leftjoin('users', 'blog_comments.user_id', '=', 'users.id')
          ->where('blog_comments.comment_id',$value->id)
          ->where('blog_comments.blog_id', $detaols_id)
          ->get();
        }

      return view('frontend.blog_detail',compact('details','details_comm'));
    }
    public function FAQ()
    {
      return view('frontend.faq');
    }
    public function Features()
    {
      return view('frontend.features');
    }
    public function Shop_Marketplace()
    {
      $latest=Product::orderBy('id','DESC')->skip(0)->take(6)->get();
      $fresh=Product::orderBy('id','DESC')->get();
      $categories=DB::table('categories')->get();
      $product_count = Product::count();
      $products=DB::table('product')->get();
    
      return view('frontend.shop_market',compact('products','product_count','latest','categories','fresh'));
    }
    public function Low_to_High(){
      $product_count = Product::count();
      $products=DB::table('product')->get();
      $latest=Product::orderBy('id','DESC')->skip(0)->take(6)->get();
      $fresh=Product::orderBy('id','DESC')->get();
      $categories=DB::table('categories')->get();
      $productsASC=DB::table('product')->orderBy('price')->get();
      return view('frontend.shop_market',compact('productsASC','latest','fresh','categories','products','product_count'));
    }
    public function High_To_Low(){
      $product_count = Product::count();
      $products=DB::table('product')->get();
      $latest=Product::orderBy('id','DESC')->skip(0)->take(6)->get();
      $fresh=Product::orderBy('id','DESC')->get();
      $categories=DB::table('categories')->get();
      $productsDESC=DB::table('product')->orderBy('price','DESC')->get();
      return view('frontend.shop_market',compact('productsDESC','latest','fresh','categories','products','product_count'));
    }
    
    public function Blog_Comment(Request $request)
    {
      $data = new Blog_comments;
      $data ->blog_id	=$request->input('blog_id');
      $data ->user_id=$request->input('user_id');
      $data ->comment=$request->input('comment');
      if(!empty($request->input('comment_id'))){
      $data ->comment_id	=$request->input('comment_id');
      }
      else{
        $data ->comment_id =null;
      }
      $data->save();
      return back();
    }

 
    public function category_details($id)
    {
      $name=DB::table('categories')->where('id',$id)->first();
      $products=DB::table('product')->where('category_id',$id)->get();
      $categories=DB::table('categories')->get();

      return view('frontend.category_details',compact('products','categories','name'));
    }
    public function Services()
    {
      return view('frontend.servicesservices');
    }
    public function Product_Detail($slug)
    {
      $details=Product::where('slug',$slug)->first();

      $totalQuantity=$details->Quantity;
      $alert=Product::where('alert_stock',$totalQuantity)->first();
      return view('frontend.product_detail',compact('details','alert'));
    }
    public function How_its_work()
    {
        $record=HowItWorks::all();
        $details=DB::table('pages')->where('page_slug','how-it-works')->first();
        return view('frontend.how_work',compact('record','details'));
    }

    public function login()
    {
      return view('frontend.login');
    }
   
    public function sales(){
      $sale_products=DB::table('product')->where('on_sale','1')->get();
      $latest=Product::orderBy('id','DESC')->skip(0)->take(3)->get();
      $categories=DB::table('categories')->get();
      $product_count = Product::count();
      $products=DB::table('product')->get();
      $sales=DB::table('order_details')->get();
      return view('frontend.sales_product',compact('products','product_count','latest','categories','sales','sale_products'));
    }
    public function usersubscribes(Request $request)
    {

        DB::table('subscribes')->insert(
            ['email' => $request->email, 'user_id' => 1]
        );
        $data = ['email' => $request->email];

        Mail::send('subscribe-mail', ["data1" => $data], function ($messages) use ($request) {
            $messages->to($request->email);
            $messages->subject('News_Letter');
        });
        $arr = compact('data');
        return redirect()->back()->with('successed', 'You have subscribe successfully!!!', $arr);
    }
    public function search(Request $request){

      if($request->ajax()){
  
          $data=Product::where('name','like','%'.$request->search.'%')
          ->orwhere('name_ar','like','%'.$request->search.'%')->get();
  
          $output='';
      if(count($data)>0){
  
  
                  foreach($data as $row){
                      $output .='


                      <ul  class ="searchul">
                        <li class ="searchli">
                         <img src="https://fisdemoprojects.com/freshfoodNew/public/Backend/images/'.$row->image.'"> 
                          <a href=/freshfoodNew/Product_Detail/'.$row->slug.'>
                          <p id="hello" class="happs"><b>'.$row->name.'</b> <br> <b class="mt-3">SAR</b><small class="mt-3 ms-2">120.00</small></p></a>

                        </li>
                      </ul>

                      ';
                  }
  
  
  
           $output .= '';
  
  
  
      }
      else{
  
          $output .='No results found';
  
      }
  
      return $output;
  
      }
  
  
  
  
    }
}
