<?php

namespace App\Http\Controllers\Backend;
use App\Models\HowItWorks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class HowItWorksController extends Controller
{
    //
	
	
	public function index(){
	$how_it_works =HowItWorks::all();

		return view('Admin.HowitsWork.index',compact('how_it_works'));
	
}
	public function create(){

	return view('Admin.HowitsWork.add');
	
}
	public function store(Request $request){
        HowItWorks::insert([
				'title'=>$request->How_its_work_title,
				'title_ar'=>$request->How_its_work_title,
				'icon'=>$request->How_its_work_icon,
				'description'=>$request->How_its_work_description,
				'description_ar'=>$request->How_its_work_description_ar,
				
				'created_at'=>Carbon::now(),

				]);


		

		return redirect('/admin/How_its_work');
	}
	public function edit($id)
	{
		 $HowItWorks=HowItWorks::findOrFail($id);
		return view('Admin.HowitsWork.edit',compact('HowItWorks'));
	}

	public function update(Request $request){
		// dd($request->id);
		$res=HowItWorks::find($request->id);
		$res->title=$request->input('HowItWorks_title');
		$res->title_ar=$request->input('HowItWorks_title_ar');
		$res->icon=$request->input('HowItWorks_icon');
		$res->description=$request->input('HowItWorks_description');
		$res->description_ar=$request->input('HowItWorks_description_ar');
		$res->save();
	
	
		
		return redirect('/admin/How_its_work');
		}
	public function delete($id)
	{
		HowItWorks::findOrFail($id)->delete();
		return redirect()->back();

	}
	
}
