<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership;
class MembershipController extends Controller
{
    //
    public function index(){
        $membership=Membership::all();
		return view('Admin.pages-membership',compact('membership'));
	
}
public function create(){
	return view('Admin.membership-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     Membership::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/membership');
	}
    public function edit($id)
	{
		$membership=Membership::findOrFail($id);
		return view('Admin.membership-form-edit',compact('membership'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=Membership::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/membership');

		}
public function delete($id)
	{
        Membership::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
