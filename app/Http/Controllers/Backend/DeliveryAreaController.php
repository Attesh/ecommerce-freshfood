<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeliveryArea;

class DeliveryAreaController extends Controller
{
    
        public function index(){
            $area=DeliveryArea::all();
            return view('Admin.delivery-area.index',compact('area'));
    }
    public function create(){
        return view('Admin.delivery-area.add');
        
    }
    public function store(Request $request){
        DeliveryArea::insert([
        'title'=>$request->title,
        'title_ar'=>$request->title_ar,
        'zipcode'=>$request->zipcode,
        'created_at'=>Carbon::now(),
    
        ]);
        return redirect('/admin/zipcode');
        }
        public function edit($id)
	{
		$area=DeliveryArea::findOrFail($id);
		return view('Admin.delivery-area.edit',compact('area'));
	}
    public function update(Request $request){
		$res=DeliveryArea::find($request->id);
		$res->title=$request->input('title');
		$res->title_ar=$request->input('title_ar');
		$res->zipcode=$request->input('zipcode');

        $res->save();
		return redirect('/admin/zipcode');
		}
        public function delete($id)
	{
		DeliveryArea::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
