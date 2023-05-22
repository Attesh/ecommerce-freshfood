<?php

namespace App\Http\Controllers\Backend;
use App\Models\LiveProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Gallery;
class GalleryController extends Controller
{
    //
    public function index(){
		$gallery=Gallery::all();
		return view('Admin.gallery.index',compact('gallery'));
	
}

public function create(){
		
	return view('Admin.gallery.add');
	
}
public function store(Request $request){
         $image=$request->file('image');
         $name_gen= hexdec(uniqid());
         $image_ext=strtolower($image->getClientOriginalExtension());
         $image_name=$name_gen.'.'.$image_ext;
         $up_location='Backend/images/';
         $last_img=$up_location.$image_name;
         $image->move(public_path($up_location),$image_name);
         Gallery::insert([
            'title'=>$request->title,
            'image'=>$image_name,
			'created_at'=>Carbon::now(),
            ]);
	return redirect('admin/gallery');
	}

	public function edit($id)
	{
		$gallery=Gallery::findOrFail($id);
		return view('Admin.gallery.edit',compact('gallery'));
	}
	public function update(Request $request){
		$res=Gallery::find($request->id);
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
		$res->title=$request->input('title');
        $res->save();
		return redirect('admin/gallery');
		}
	public function delete($id)
	{
		Gallery::findOrFail($id)->delete();
	   return redirect()->back();

	}
}


    