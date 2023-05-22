<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
class AddtocartController extends Controller
{
    //
	
	
	public function index(){
	$card_data =DB::table('add_to_carts')->get();
	// // $order_data_status =DB::table('orders')->where('order_status','pending')->first();
	// $order_data_status= 'pending';

		return view('Admin.Addtocart.index',compact('card_data'));
	
}
	
}
