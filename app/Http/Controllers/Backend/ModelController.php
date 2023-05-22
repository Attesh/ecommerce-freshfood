<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LiveModel;
use App\Models\Make;
class ModelController extends Controller
{
    //
    public function index(){
		$model=LiveModel::all();
		return view('Admin.sub-categories',compact('model'));
	
}
public function create(){
	$make=Make::all();
		
	return view('Admin.model-form',compact('make'));
  
	
}
public function store(Request $request){
	LiveModel::insert([
	'model_name'=>$request->model_name,
	'make_id'=>$request->model_type,
	]);
	return redirect('admin/model');
	}
	public function edit($id)
	{
		$make=Make::all();
		$model=LiveModel::findOrFail($id);
		return view('Admin.model-form-edit',compact('model','make'));
	}
	public function update(Request $request){
		// dd($request->all());
		LiveModel::findOrFail($request->id)->update([
			'model_name'=>$request->model_name,
			'make_id'=>$request->model_type,
		]);
		
		return redirect('admin/model');
		}
	public function delete($id)
	{
		
       LiveModel::findOrFail($id)->delete();
	   return redirect()->back();

	}
	
}
