<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublicityCommittee;
class PublicityCommitteeController extends Controller
{
    //
    public function index(){
        $publicity=PublicityCommittee::all();
		return view('Admin.pages-publicityCommittee',compact('publicity'));
	
}
public function create(){
	return view('Admin.publicityCommittee-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     PublicityCommittee::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/publicity-committee');
	}
    public function edit($id)
	{
		$publicity=PublicityCommittee::findOrFail($id);
		return view('Admin.publicityCommittee-form-edit',compact('publicity'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=PublicityCommittee::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/publicity-committee');

		}
public function delete($id)
	{
        SocialCommittee::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
