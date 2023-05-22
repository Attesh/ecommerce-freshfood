<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order_detail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Facades\Mail;
class OrdersController extends Controller
{
    //
	
	
	public function index(){
	$order_data =DB::table('orders')->where('order_status','pending')->get();
	// $order_data_status =DB::table('orders')->where('order_status','pending')->first();
	$order_data_status= 'pending';

		return view('Admin.orders.index',compact('order_data','order_data_status'));
	
}
public function dispatched_index(){
	$order_data =DB::table('orders')->where('order_status','processing')->get();
	$order_data_status= 'processing';

		return view('Admin.orders.index',compact('order_data','order_data_status'));
	
}
public function delivered_index(){
	$order_data =DB::table('orders')->where('order_status','dispatched')->get();
	$order_data_status= 'delivered';

		return view('Admin.orders.index',compact('order_data','order_data_status'));
	
}
public function Canceled_index(){
	$order_data =DB::table('orders')->where('order_status','completed')->get();
	$order_data_status= 'completed';

		return view('Admin.orders.index',compact('order_data','order_data_status'));
	
}
public function rejected_index(){
	$order_data =DB::table('orders')->where('order_status','incomplete')->get();
	$order_data_status= 'incomplete';

		return view('Admin.orders.index',compact('order_data','order_data_status'));
	
}
// delivered_index.php
public function view($id){
    // return $id;
	// $order_details =Order_detail::all();
		//  $order_details=Order_detail::find($id);

		 $order_details=DB::table('order_details')->where('order_id',$id)->first();
		 $orders=DB::table('orders')->where('id',$id)->first();
        //  dd($order_details);
        // return $order_details;

    return view('Admin.orders.view',compact('order_details','orders'));
}

 public function accept($id){
    // return $id;
	$order_details=DB::table('orders')->where('id',$id)->first();
	$user=DB::table('users')->where('id',$order_details->customer_id)->first();
	// dd($customer);
    // $order_stat=Orders::findOrFail($id);
    if ($order_details->order_status == 'pending'){
        DB::table('orders')
            ->where('id', $id)
            ->update(array('order_status' => 'processing'));
			$data = ['status'=>'processing'];

		
 
			Mail::send('orders-mail', ['user' => $user ,"data1" => $data], function ($m) use ($user) {
				// $m->from($user->email, $user->name, 'Your Application');
	 
				$m->to($user->email,)->subject('Your Reminder!');
				
			});
			return back();
    

    }
    if ($order_details->order_status == 'processing'){
        DB::table('orders')
            ->where('id', $id)
            ->update(array('order_status' => 'dispatched'));
			$data = ['status'=>'dispatched'];

		
 
			Mail::send('orders-mail', ['user' => $user ,"data1" => $data], function ($m) use ($user) {
				
	 
				$m->to($user->email,)->subject('Your Reminder!');
				
			});
        return back();

    }
    if ($order_details->order_status == 'dispatched'){
        DB::table('orders')
            ->where('id', $id)
            ->update(array('order_status' => 'completed','status'=>'complete'));
			$data = ['status'=>'completed'];

		
 
			Mail::send('orders-mail', ['user' => $user ,"data1" => $data], function ($m) use ($user) {
				
	 
				$m->to($user->email,)->subject('Your Reminder!');
				
			});
        return back();

    }
	if ($order_details->order_status == 'incomplete'){
        DB::table('orders')
            ->where('id', $id)
            ->update(array('order_status' => 'incomplete','status'=>'incomplete'));
        return back();

    }


 }
	public function create(){

	return view('Admin.HowitsWork.add');
	
}
	public function store(Request $request){
        HowItWorks::insert([
				'title'=>$request->How_its_work_title,
				'icon'=>$request->How_its_work_icon,
				'description'=>$request->How_its_work_description,
				
				'created_at'=>Carbon::now(),

				]);


		

		return redirect('/admin/How_its_work');
	}
	public function edit($id)
	{
		 $HowItWorks=HowItWorks::findOrFail($id);
		return view('Admin.HowitsWork.edit',compact('HowItWorks'));
	}

	public function update(Request $request){
		// dd($request->id);
		$res=HowItWorks::find($request->id);
		$res->title=$request->input('HowItWorks_title');
		$res->icon=$request->input('HowItWorks_icon');
		$res->description=$request->input('HowItWorks_description');
		$res->save();
	
	
		
		return redirect('/admin/How_its_work');
		}
	public function delete($id)
	{
		HowItWorks::findOrFail($id)->delete();
		return redirect()->back();

	}
	
}
