<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trusty;

class TrustiesController extends Controller
{
    //
    public function index(){
		$record=Trusty::all();
		return view('Admin.board-of-trusties.index',compact('record'));
	
}
public function create(){
	$record=Trusty::all();
	return view('Admin.board-of-trusties.add',compact('record'));
  
	
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

     Trusty::insert([
	'name'=>$request->name,
	'title'=>$request->title,
	'member_image'=>$image_name1,
	]);
	return redirect('admin/trusty');
	}
    public function edit($id)
	{
		$record=Trusty::findOrFail($id);
		return view('Admin.board-of-trusties.edit',compact('record'));
	}
    public function update(Request $request){
		//dd($request);
		$res=Trusty::find($request->id);
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
		return redirect('admin/trusty');
		}
    public function delete($id)
	{
		
        Trusty::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
