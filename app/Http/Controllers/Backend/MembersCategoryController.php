<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembersCategory;

class MembersCategoryController extends Controller
{
    //
    public function index(){
		$category=MembersCategory::all();
		return view('Admin.members-category.index',compact('category'));
	
}
public function create(){
	$category=MembersCategory::all();
	return view('Admin.members-category.add',compact('category'));
  
	
}
public function store(Request $request){
     MembersCategory::insert([
	'title'=>$request->title,
	]);
	return redirect('admin/members-category');
	}
    public function edit($id)
	{
		$category=MembersCategory::findOrFail($id);
		return view('Admin.members-category.edit',compact('category'));
		
	}
    public function update(Request $request){
        $res->title=$request->input('title');
		$res->icon=$request->input('icon');
		$res->description=$request->input('description');
        $res->save();
		return redirect('admin/members-category');
		}
    public function delete($id)
	{
		
        MembersCategory::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
