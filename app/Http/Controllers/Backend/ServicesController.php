<?php
namespace App\Http\Controllers\Backend;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ServicesController extends Controller
{
    //

    public function index(){
		$services=Services::all();
		return view('Admin.services.index',compact('services'));
	
}
public function create(){
	
	
	return view('Admin.services.add');
  
	
}

public function store(Request $request){
   
	 

	Services::insert([
	
	'service_icon'=>$request->service_icon,
	'title'=>$request->title,
	]);
	return redirect('/admin/services');
	}
	public function edit($id)
	{
		
		$services=Services::findOrFail($id);
		
		return view('Admin.services.edit',compact('services'));
		
		
	}
	public function update(Request $request){
		$res=Services::find($request->id);
		$res->service_icon=$request->input('service_icon');
		$res->title=$request->input('title');
        $res->save();
		return redirect('/admin/services');
		}

public function delete($id)
	{
		Services::findOrFail($id)->delete();
	   return redirect()->back();

	}
	
}
