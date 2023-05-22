<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Str;
class CityController extends Controller
{
    
        public function index(){
            $city=City::all();
            return view('Admin.City.index',compact('city'));
    }
    public function create(){
        return view('Admin.City.add');
        
    }
    public function store(Request $request){
        $slug = Str::slug($request->name);
        City::insert([
        'title'=>$request->title,
        'title_ar'=>$request->title_ar,
        'slug'=>$slug,
        'created_at'=>Carbon::now(),
    
        ]);
        return redirect('/admin/city');
        }
        public function edit($id)
	{
		$city=City::findOrFail($id);
		return view('Admin.City.edit',compact('city'));
	}
    public function update(Request $request){
		$res=City::find($request->id);
		$res->title=$request->input('title');
		$res->title_ar=$request->input('title_ar');
        $slug = Str::slug($request->input('title'));

        $res->save();
		return redirect('/admin/city');
		}
        public function delete($id)
	{
		City::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
