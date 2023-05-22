<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

  
  
use Illuminate\Http\Request;
use App\Models\Credit_card_detail;
use App\Models\Order_billing_address;
use App\Models\Orders;
use App\Models\Order_detail;
class AddDetailsController extends Controller
{
   public function store(Request $request){


    $data=new Credit_card_detail();
    $data ->card_number=$request->card_number;
    $data ->card_cvc=$request->cvc;
    $data ->card_expiry=$request->expiration .'/'. $request->year;
    $data ->card_type='Card';
    $data->save();
    $data->id;
    $order=new Orders();
    $order ->order_type='shop';
    $order ->customer_id='1';
    $order ->payment_option='card';
    $order ->card_number_id=$data->id;
    $order ->ship_to='customer';
    $order ->status='incomplete';
    $order ->payment_status='pending';
    $order ->shipping_status='pending';
    $order ->order_status='pending';
    $order ->corder_status='pending';
    $order ->order_total=$request->total;
    $order ->payment_received=$request->total;
    $order ->insurance_amount='0';
    $order ->tax_amount='0';
    $order ->shipping_amount='0';
    $order ->discount_amount='0';
    $order ->tax_exempt='0';
    $order ->transaction_id=$request->card_number;
    $order->save();
    $order->id;
   
    foreach(session('cart') as $id => $details)
    {
    //  echo $details['name'];
     Order_detail::create([
        'order_id'=>$order->id,
        'item_id'=>$details['id'],
        'item_quantity'=>$details['quantity'],
        'item_price'=>$details['price'],
        'subtotal'=>$details['price']*$details['quantity'],
        'sale_type'=>'full',

     ]);
     
    }
    $billing=new Order_billing_address();
    $billing ->order_id=$request->order_id;
    $billing ->first_name=$request->billing_name;
    $billing ->email=$request->billing_email;
    $billing ->phone=$request->billing_phone;
    $billing ->street_address=$request->billing_address;
    $billing->save();

    return redirect()->back()->with('success', '' ,'errors','');
   
}

}
