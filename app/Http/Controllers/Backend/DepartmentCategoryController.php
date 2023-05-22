<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DepartmentCategory;
class DepartmentCategoryController extends Controller
{
    //
    public function index(){
        $category=DepartmentCategory::all();
		return view('Admin.department-category.index',compact('category'));
	
}
public function create(){
	return view('Admin.department-category.add');
	
}
public function store(Request $request){
	DepartmentCategory::insert([
	'title'=>$request->title,
	'created_at'=>Carbon::now(),

	]);
	return redirect('admin/department-category');
	}
    public function edit($id)
	{
		$category=DepartmentCategory::findOrFail($id);
		return view('Admin.department-category.edit',compact('category'));
	}
    public function update(Request $request){
		$res=DepartmentCategory::find($request->id);
		$res->title=$request->input('title');

        $res->save();
		return redirect('admin/department-category');
		}
public function delete($id)
	{
		DepartmentCategory::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
