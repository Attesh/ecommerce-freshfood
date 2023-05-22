<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Models\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    //
	
	
	public function index(){
		$category=DB::table('categories')->get();

		return view('Admin.category.index',compact('category'));
	
}
	public function create(){
		
	return view('Admin.category.add');
	
}
	public function store(Request $request){
		
		$slug = Str::slug($request->category_name);
		$slug = Str::slug($request->category_name_ar);
		$images=$request->file('images');
		if ($images){
			$name_gen= hexdec(uniqid());
		$image_ext=strtolower($images->getClientOriginalExtension());
		$image_name=$name_gen.'.'.$image_ext;
		$up_location='Backend/images/';
		$last_img=$up_location.$image_name;
		$images->move(public_path($up_location),$image_name);

	Category::insert([
	'name'=>$request->category_name,
	'name_ar'=>$request->category_name_ar,
	'image'=>$image_name,
	'icon'=>$request->category_icon,
	'slug'=>$slug,

	'created_at'=>Carbon::now(),
	]);
		}
		else{
	

	Category::insert([
	'name'=>$request->category_name,
	'name_ar'=>$request->category_name_ar,

	'icon'=>$request->category_icon,
	'slug'=>$slug,

	'created_at'=>Carbon::now(),
	]);
}
	return redirect('admin/category');
	}
	public function edit($id)
	{
		$category=DB::table('categories')->find($id);
		return view('Admin.category.edit',compact('category'));
	}

	// public function update(Request $request){
	// dd($request->all());
	// }
	public function update(Request $request){
		$slug = Str::slug($request->category_name);
		$slug = Str::slug($request->category_name_ar);
		$image=$request->file('images');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		 $res = $image_name;
		$res=DB::table('categories')
		->where('id', $request->id)
		->update(array('name' => $request->category_name,'name_ar' => $request->category_name_ar,'icon'=> $request->category_name,'slug'=>$slug,'image'=>$image_name));
        }
		else{
		$res=DB::table('categories')
            ->where('id', $request->id)
			->update(array('name' => $request->category_name,'name_ar' => $request->category_name_ar,'icon'=> $request->category_icon,'slug'=>$slug,'image'=>''));
		}
		// $res=categories::find($request->id);
		// $res->category_name=$request->input('category_name');
        // $res->save();
		return redirect('admin/category');
	}
	public function delete($id)
	{
		// Category::findOrFail($id)->delete();
		DB::table('categories')
            ->where('id', $id)
			->delete();
		return redirect()->back();

	}
	
}
