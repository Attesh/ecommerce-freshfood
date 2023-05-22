<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CommitteeCategoryController extends Controller
{
    //
    public function index(){
        $category=Category::all();
		return view('Admin.category.index',compact('category'));
	
}
public function create(){
	return view('Admin.category.add');
	
}
public function store(Request $request){
	Category::insert([
	'title'=>$request->title,
	'checkbox_id'=>$request->checkbox_id,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/category');
	}
    public function edit($id)
	{
		$category=Category::findOrFail($id);
		return view('Admin.category.edit',compact('category'));
	}
    public function update(Request $request){
		$res=Category::find($request->id);
		$res->title=$request->input('title');
		$res->checkbox_id=$request->input('checkbox_id');

        $res->save();
		return redirect('admin/category');
		}
public function delete($id)
	{
		Category::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
