<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Category;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index(){
		$privacy=Blogs::all();
		return view('Admin.blogs.index',compact('privacy'));
}
public function create(){
	$privacy=Blogs::all();
	$category = Category::all();
	return view('Admin.blogs.add',compact('privacy','category'));
  
	
}
public function store(Request $request){
	$image1=$request->file('image1');
	if($image1){
		$name_gen= hexdec(uniqid());
		$image_ext=strtolower($image1->getClientOriginalExtension());
		$image_name1=$name_gen.'.'.$image_ext;
		$up_location='Backend/images/';
		$last_img=$up_location.$image_name1;
		$image1->move(public_path($up_location),$image_name1);
	
	 

	 if($request->status == ''  && $request->product_featured == ''){
		$status = 0;
		$featured = 0;
	}
	else{
		$status='1';
		$featured='1';
		
	}
	
	
		$slug = Str::slug($request->name);
		Blogs::insert([
	   'category_id'=>$request->category_id,
	   'name'=>$request->name,
	   // 'featured'=>$featured ,
	   // 'status'=>$status,
	   'slug'=>$slug,
	   'short_description'=>$request->short_description,
	   'description'=>$request->description,
	   'name_ar'=>$request->name_ar,
	   'short_description_ar'=>$request->short_description_ar,
	   'description_ar'=>$request->description_ar,
	   'image'=>$image1,
	   ]);
	}
	else{
		$slug = Str::slug($request->name);
		Blogs::insert([
	   'category_id'=>$request->category_id,
	   'name'=>$request->name,
	   // 'featured'=>$featured ,
	   // 'status'=>$status,
	   'slug'=>$slug,
	   'short_description'=>$request->short_description,
	   'description'=>$request->description,
	   'name_ar'=>$request->name_ar,
	   'short_description_ar'=>$request->short_description_ar,
	   'description_ar'=>$request->description_ar,
	   ]);
	}
	
	return redirect('admin/blogs');
	}
    public function edit($id)
	{
		$category=Category::all();
		$privacy=Blogs::findOrFail($id);
		return view('Admin.blogs.edit',compact('privacy','category'));
	}
    public function update(Request $request){
		$res=Blogs::find($request->id);
		$slug = Str::slug($request->input('title'));
		$res->name=$request->input('title');
		$res->name_ar=$request->input('title_ar');
        $res->short_description=$request->input('short_description');
        $res->short_description_ar=$request->input('short_description_ar');
        $res->description=$request->input('description');
        $res->description_ar=$request->input('description_ar');
		$res->category_id=$request->input('category_id');
		$res->$slug ;
		// if($request->status == '1' && $request->blog_featured == '1'){
		// 	$res->Status='1';
		// 	$res->featured='1';

		// 	}else{
		// 		$res->Status='0';
		// 		$res->featured='0';
		// 	}
		$image1=$request->file('image1');
		if ($image1) {
			$name_gen= hexdec(uniqid());
			 $image_ext=strtolower($image1->getClientOriginalExtension());
			 $image_name=$name_gen.'.'.$image_ext;
			 $up_location='Backend/images/';
			 $last_img=$up_location.$image_name;
			 $image1->move(public_path($up_location),$image_name);
			$res->image = $image_name;
			}
			
			
        $res->save();
		return redirect('admin/blogs');
		}
    public function delete($id)
	{
		
		Blogs::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
