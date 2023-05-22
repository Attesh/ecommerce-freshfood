<?php

namespace App\Http\Controllers\Backend;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
    //
    public function index(){
		// $contact=Contact::all();
		$contact=DB::table('contact_u_s')->get();
		return view('Admin.contactUs.index',compact('contact'));
	
}
public function create(){
	$contact=Contact::all();
		
	return view('Admin.contactUs.add',compact('contact'));
  
	
}
public function store(Request $request){
	Contact::insert([
	'phone1'=>$request->phone1,
	'phone2'=>$request->phone2,
    'email'=>$request->email,
    'location'=>$request->location,
	]);
	return redirect('admin/contact');
	}
     public function edit()
	{
		// $contact=Contact::first();
		$contact=DB::table('contact_u_s')->first();
		//dd($contact);
		return view('Admin.contactUs.edit',compact('contact'));
	}
    public function update(Request $request){
		// dd($request->id);
		$res=Contact::find($request->id);
		//dd($res);
		Contact::where('id',$request->id)->update([
			'phone1'=>$request->phone1,
			'phone2'=>$request->phone2,
			'email'=>$request->email,
			'location'=>$request->location,

		]);
     
		return redirect('admin/contact');
		}
		
    public function delete($id)
	{
		
       Contact::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
