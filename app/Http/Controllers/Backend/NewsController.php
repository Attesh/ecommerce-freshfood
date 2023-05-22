<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    //
    public function index(){
        $news=News::all();
		return view('Admin.news.index',compact('news'));
	
}
public function create(){
	$news=News::all();
	return view('Admin.news.add',compact('news'));
	
}
public function store(Request $request){
	$image=$request->file('image');
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	News::insert([
	'title'=>$request->title,
	'image'=>$image_name,
	'description'=>$request->description,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/news');
	}
    public function edit($id)
	{
		$news=News::findOrFail($id);
		return view('Admin.news.edit',compact('news'));
	}
    public function update(Request $request){
		$res=News::find($request->id);
		$res->title=$request->input('title');
		$res->description=$request->input('description');
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
		return redirect('admin/news');
		}
public function delete($id)
	{
		News::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
