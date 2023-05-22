<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HealthService;
class HealthServiceController extends Controller
{
    //
    public function index(){
        $healthService=HealthService::all();
		return view('Admin.pages-health',compact('healthService'));
	
}
public function create(){
	return view('Admin.health-form');
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
     HealthService::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/health');
	}
    public function edit($id)
	{
		$healthService=HealthService::findOrFail($id);
		return view('Admin.health-form-edit',compact('healthService'));
	}
    public function update(Request $request){
		$image=$request->file('image');
		 $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		$res=HealthService::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
		$res->image=$image_name;

        $res->save();
		
	    return redirect('admin/health');

		}
public function delete($id)
	{
        HealthService::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
