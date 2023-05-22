<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;
class InvestmentController extends Controller
{
    //
    public function index(){
        $investment=Investment::all();
		return view('Admin.pages-investment',compact('investment'));
	
}
public function create(){
	return view('Admin.investment-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     Investment::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/investment');
	}
    public function edit($id)
	{
		$investment=Investment::findOrFail($id);
		return view('Admin.investment-form-edit',compact('investment'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=Investment::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/investment');

		}
public function delete($id)
	{
        Investment::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
