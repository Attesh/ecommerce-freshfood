<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Category;
class EventsController extends Controller
{
    //
    public function index(){
        $events=Events::all();
		return view('Admin.events.index',compact('events'));
	
}
public function create(){
	$category=Category::all();
	return view('Admin.events.add',compact('category'));
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	Events::insert([
	'title'=>$request->title,
	'image'=>$image_name,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/events');
	}
    public function edit($id)
	{
		$category=Category::all();
		$events=Events::findOrFail($id);
		return view('Admin.events.edit',compact('events','category'));
	}
    public function update(Request $request){
		$res=Events::find($request->id);
		$res->title=$request->input('title');
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
		return redirect('admin/events');
		}
public function delete($id)
	{
		Events::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
