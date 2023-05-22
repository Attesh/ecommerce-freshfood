<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Insurance;
class InsuranceController extends Controller
{
    //
    public function index(){
        $insurance=Insurance::all();
		return view('Admin.pages-insurance',compact('insurance'));
	
}
public function create(){
	return view('Admin.insurance-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     Insurance::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/insurance');
	}
    public function edit($id)
	{
		$insurance=Insurance::findOrFail($id);
		return view('Admin.insurance-form-edit',compact('insurance'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=Insurance::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/insurance');

		}
public function delete($id)
	{
        Insurance::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
