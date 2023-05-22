<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DepartmentList;
use App\Models\CommitteeList;
use App\Models\CommitteeCategory;
use App\Models\SubCategory;
use App\Models\CommitteeMembers;
use App\Models\DepartmentCategory;
class DepartmentListController extends Controller
{
    //
    public function index(){
        $department_list=DepartmentList::all();
        $list=CommitteeList::all();
		return view('Admin.department-list.index',compact('list','department_list'));
	
}
public function create(){
         $category=DepartmentCategory::get();
	    return view('Admin.department-list.add',compact('category'));
	
}

public function store(Request $request){
    
    $image=$request->image;             
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $image->move(public_path($up_location),$image_name);
	 DepartmentList::insert([
    'category_id'=>$request->category_id,
    'title'=>$request->title,
	'link'=>$request->link,
    'image'=>$image_name,
	'created_at'=>Carbon::now(),
        
	]);
	
	return redirect('admin/department-list');
	}
    public function edit($id)
	{
		$department_category=DepartmentCategory::all();
        $department_list=DepartmentList::findOrFail($id);
		return view('Admin.department-list.edit',compact('department_list','department_category'));
	}
    public function update(Request $request){
		$res=DepartmentList::find($request->id);
		$res->category_id=$request->input('category_id');
		$res->title=$request->input('title');
		$res->link=$request->input('link');
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
		return redirect('admin/department-list');
		}
public function delete($id)
	{
		DepartmentList::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
