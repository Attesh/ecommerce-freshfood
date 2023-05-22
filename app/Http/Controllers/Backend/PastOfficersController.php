<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PastOfficer;

class PastOfficersController extends Controller
{
    //
    public function index(){
		$record=PastOfficer::all();
		return view('Admin.past-officers.index',compact('record'));
	
}
public function create(){
	$record=PastOfficer::all();
	return view('Admin.past-officers.add',compact('record'));
  
	
}
public function store(Request $request){
	//dd($request);
	$image1=$request->file('image1');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image1->getClientOriginalExtension());
	 $image_name1=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name1;
	 $image1->move(public_path($up_location),$image_name1);

     PastOfficer::insert([
	'name'=>$request->name,
	'title'=>$request->title,
	'member_image'=>$image_name1,
	]);
	return redirect('admin/past-officers');
	}
    public function edit($id)
	{
		$record=PastOfficer::findOrFail($id);
		return view('Admin.past-officers.edit',compact('record'));
	}
    public function update(Request $request){
		//dd($request);
		$res=PastOfficer::find($request->id);
        $res->name=$request->input('name');
		$res->title=$request->input('title');
		$image1=$request->file('image1');
		if($image1){
		$name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image1->getClientOriginalExtension());
		 $image_name1=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name1;
		 $image1->move(public_path($up_location),$image_name1);
		 $res->member_image=$image_name1;
		}
        $res->save();
		return redirect('admin/past-officers');
		}
    public function delete($id)
	{
		
        PastOfficer::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
