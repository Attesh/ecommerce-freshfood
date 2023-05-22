<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;
use Illuminate\Support\Str;
use DB;
class CMSController extends Controller
{
    //
    public function index(){
		$cms=CMS::all();
		return view('Admin.cms.index',compact('cms'));
	
}
public function create(){
	$cms=CMS::all();
		
	return view('Admin.cms.add',compact('cms'));
  
	
}
public function store(Request $request){
	
	$obj = new CMS();
	$obj->section_name=$request->section_name;
	$obj->slug= Str::slug($request->section_name);
	$obj->icon_right1=$request->icon_right1;
	$obj->title_right1=$request->title_right1;
	$obj->short_description_right1=$request->short_description_right1;
	$obj->icon_right2=$request->icon_right2;
	$obj->title_right2=$request->title_right2;
	$obj->short_description_right2=$request->short_description_right2;
	$obj->icon_left1=$request->icon_left1;
	$obj->title_left1=$request->title_left1;
	$obj->short_description_left1=$request->short_description_left1;
	$obj->icon_left2=$request->icon_left2;
	$obj->title_left2=$request->title_left2;
	$obj->short_description_left2=$request->short_description_left2;
	$obj->save();
	
	return redirect('admin/cms');
	}
    public function edit($id)
	{
		$cms=CMS::findOrFail($id);
		return view('Admin.cms.edit',compact('cms'));
	}
    public function update(Request $request){
		$res=CMS::find($request->id);
		$res->section_name=$request->input('section_name');
		// $res->slug= Str::slug($request->input('section_name'));
		$res->icon_right1=$request->input('icon_right1');
		$res->title_right1=$request->input('title_right1');
		$res->short_description_right1=$request->input('short_description_right1');
		$res->icon_right2=$request->input('icon_right2');
		$res->title_right2=$request->input('title_right2');
		$res->short_description_right2=$request->input('short_description_right2');
		$res->icon_left1=$request->input('icon_left1');
		$res->title_left1=$request->input('title_left1');
		$res->short_description_left1=$request->input('short_description_left1');
		$res->icon_left2=$request->input('icon_left2');
		$res->title_left2=$request->input('title_left2');
		$res->short_description_left2=$request->input('short_description_left2');
		$res->section_name_arr=$request->input('section_name_arr');
		$res->title_right1_arr=$request->input('title_right1_arr');
		$res->short_description_right1_arr=$request->input('short_description_right1_arr');
		$res->title_right2_arr=$request->input('title_right2_arr');
		$res->short_description_right2_arr=$request->input('short_description_right2_arr');
		$res->title_left1_arr=$request->input('title_left1_arr');
		$res->short_description_left1_arr=$request->input('short_description_left1_arr');
		$res->title_left2_arr=$request->input('title_left2_arr');
		$res->short_description_left2_arr=$request->input('short_description_left2_arr');
        $res->save();
		return redirect('admin/cms');
		}
    public function delete($id)
	{
		
		CMS::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
