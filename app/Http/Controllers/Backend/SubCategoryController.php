<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use DB;
class SubCategoryController extends Controller
{
    //
    public function index(){

        // $subcategory=Category::find(1)->subcategorie;
		// $category=DB::table('category')->first();
		// $subcategory	=SubCategory::all();
		$subcategory = SubCategory::get();
		// foreach ($subcategory->category as $value) {
		// 	echo  " $value->title\n";
		// }
		// print_r($category->title);
		// dump($subcategory);
		// dump($subcategory->category->title);

		return view('Admin.product-subcategory.index',compact('subcategory'));

}
public function create(){
	$category=Category::all();
	$category_data=Category::all();
	return view('Admin.product-subcategory.add',compact('category','category_data'));

}
public function store(Request $request){
	// return $request;
     SubCategory::insert([
	'title'=>$request->title,
	'title_ar'=>$request->title_ar,
	'category_id'=>$request->category_id,
	'created_at'=>Carbon::now(),

	]);
	return redirect('/admin/subcategory');

	}
// 	}
    public function edit($id)
	{
		// return $id;
		$category=Category::all();
		$subcategory=SubCategory::findOrFail($id);
		return view('Admin.product-subcategory.edit',compact('subcategory','category'));
	}
    public function update(Request $request){
		$res=SubCategory::find($request->id);
		$res->title=$request->input('title');
		$res->title_ar=$request->input('title_ar');
		$res->category_id=$request->input('category_id');
        $res->save();

	    return redirect('/admin/subcategory');

		}
public function delete($id)
	{
		$sub_category = SubCategory::findOrFail($id);
		
		SubCategory::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
