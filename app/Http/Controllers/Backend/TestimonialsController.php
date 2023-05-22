<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    //
    public function index(){
		$testimonials=Testimonials::all();
		return view('Admin.testimonials.index',compact('testimonials'));
	
}
public function create(){
	$testimonials=Testimonials::all();
	return view('Admin.testimonials.add',compact('testimonials'));
  
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);

	 Testimonials::insert([
	'description'=>$request->description,
	'name'=>$request->name,
	'description_ar'=>$request->description_ar,
	'name_ar'=>$request->name_ar,
	'image'=>$image_name,
	]);
	return redirect('admin/testimonials');
	}
    public function edit($id)
	{
		$testimonials=Testimonials::findOrFail($id);
		return view('Admin.testimonials.edit',compact('testimonials'));
	}
    public function update(Request $request){
		$res=Testimonials::find($request->id);
        $res->description=$request->input('description');
		$res->name=$request->input('name');
		$res->description_ar=$request->input('description_ar');
		$res->name_ar=$request->input('name_ar');
		$image=$request->file('image');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->image = $image_name;
        }
        $res->save();
		return redirect('admin/testimonials');
		}
    public function delete($id)
	{
		
		Testimonials::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
