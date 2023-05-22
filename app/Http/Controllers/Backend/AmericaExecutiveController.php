<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AmericaExecutive;

class AmericaExecutiveController extends Controller
{
    //
    public function index(){
		$record=AmericaExecutive::all();
		return view('Admin.america-executive-committee.index',compact('record'));
	
}
public function create(){
	$record=AmericaExecutive::all();
	return view('Admin.america-executive-committee.add',compact('record'));
  
	
}
public function store(Request $request){
	//dd($request);
	$image1=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image1->getClientOriginalExtension());
	 $image_name1=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name1;
	 $image1->move(public_path($up_location),$image_name1);

     AmericaExecutive::insert([
	'name'=>$request->name,
	'title'=>$request->title,
	'image'=>$image_name1,
	]);
	return redirect('admin/america-executive');
	}
    public function edit($id)
	{
		$record=AmericaExecutive::findOrFail($id);
		return view('Admin.america-executive-committee.edit',compact('record'));
		
	}
    public function update(Request $request){
        $res=AmericaExecutive::find($request->id); 
        $res->name=$request->input('name');
		$res->title=$request->input('title');
		$image1=$request->file('image');
		if($image1){
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image1->getClientOriginalExtension());
		 $image_name1=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name1;
		 $image1->move(public_path($up_location),$image_name1);
		$res->image=$image_name1;
		}
        $res->save();
		return redirect('admin/america-executive');
		}
    public function delete($id)
	{
		
        AmericaExecutive::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
