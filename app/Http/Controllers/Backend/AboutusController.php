<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\AboutUsService;
use DB;
class AboutusController extends Controller
{
    //
    public function index(){
		$aboutus=AboutUs::all();
		return view('Admin.aboutUs.index',compact('aboutus'));
	
}
public function create(){
	$aboutus=AboutUs::all();
		
	return view('Admin.aboutUs.add',compact('aboutus'));
  
	
}
public function store(Request $request){
	
	$image=$request->file('image');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image->getClientOriginalExtension());
	$image_name=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name;
	$image->move(public_path($up_location),$image_name);
	$image1=$request->file('image1');
	$name_gen= hexdec(uniqid());
	$image_ext=strtolower($image1->getClientOriginalExtension());
	$image_name1=$name_gen.'.'.$image_ext;
	$up_location='Backend/images/';
	$last_img=$up_location.$image_name1;
	$image1->move(public_path($up_location),$image_name1);
	dd($image_name1);
	$cmsID=AboutUs::insertGetId([
	'title1'=>$request->title1,
	'short_description'=>$request->short_description,
	'short_description1'=>$request->short_description1,
	'title2'=>$request->title2,
	'phone'=>$request->phone,
	'short_description2'=>$request->short_description2,
	'title3'=>$request->title3,
	'short_description3'=>$request->short_description3,
	'description2'=>$request->description2,
	'description'=>$request->description,
	'image'=>$image_name,
	'image1'=>$image_name1,
	]);

	$items = $request->all('cms');
	foreach($items as $key => $request)
	{
		for($i=0; $i<count($request); $i++){
			AboutUsService::insert([
			'cms_id'=>$cmsID,
			'icon' => $request[$i]['icon'],
			'title' => $request[$i]['title'],
			'service_description' => $request[$i]['description'],
			'icon1'=>$request[$i]['icon1'],
			'title1'=>$request[$i]['title1'],
			'created_at'=>Carbon::now(),
			]);
		}
		
	}





	return redirect('admin/aboutUs');
	}
    public function edit($id)
	{
		$aboutus=AboutUs::findOrFail($id);
		$service=AboutUsService::where('cms_id',$id)->get();
		return view('Admin.aboutUs.edit',compact('aboutus','service'));
	}
    public function update(Request $request){
		$another_id=$request->id;
		$image=$request->file('image');
		$res=AboutUs::find($request->id);
		$res->short_description=$request->input('short_description');
        $res->description=$request->input('description');
		if ($image) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			$image1=$request->file('image1');
			if ($image1) {
				$name_gen= hexdec(uniqid());
				 $image_ext=strtolower($image1->getClientOriginalExtension());
				 $image_name1=$name_gen.'.'.$image_ext;
				 $up_location='Backend/images/';
				 $last_img=$up_location.$image_name;
				 $image->move(public_path($up_location),$image_name1);
				$res->image1 = $image_name1;
				}
        $res->save();

		$items = $request->all('aboutus');
		
		DB::table('aboutUs_services')->where('aboutUs_id', $another_id)->delete();
		foreach($items as $key => $request)
		{
			for($i=0; $i<count($request); $i++){
				AboutUsService::insert([
					'aboutUs_id'=>$another_id,
					'icon' => $request[$i]['icon'],
					'title' => $request[$i]['title'],
					'service_description' => $request[$i]['service_description'],
					'created_at'=>Carbon::now(),
					]);
			}
			
		}


		return redirect('admin/aboutUs');
		}
    public function delete($id)
	{
		
		AboutUs::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
