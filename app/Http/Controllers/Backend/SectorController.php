<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\City;
use DB;
class SectorController extends Controller
{
    //
    public function index(){
		$sector = Sector::all();

		return view('Admin.Sectors.index',compact('sector'));

}
public function create(){
	$city=City::all();
	return view('Admin.Sectors.add',compact('city'));

}
public function store(Request $request){
     Sector::insert([
	'title'=>$request->title,
	'title_ar'=>$request->title_ar,
	'city_id'=>$request->city_id,
	'created_at'=>Carbon::now(),

	]);
	return redirect('/admin/sector');

	}
// 	}
    public function edit($id)
	{
		// return $id;
		$city=City::all();
		$sector=Sector::findOrFail($id);
		return view('Admin.Sectors.edit',compact('city','sector'));
	}
    public function update(Request $request){
		$res=Sector::find($request->id);
		$res->title=$request->input('title');
		$res->title_ar=$request->input('title_ar');
		$res->city_id=$request->input('city_id');
        $res->save();

	    return redirect('/admin/sector');

		}
public function delete($id)
	{
		
		Sector::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
