<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;
use Illuminate\Support\Str;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
        $manufacturer_data = Manufacturer::get()->all();
    	return view('Admin.manufacturer.index',compact('manufacturer_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */public function create(){
		
	return view('Admin.manufacturer.add');
	
}
public function store(Request $request){
	$request->validate([
		'images' => 'required',
		
	  ]);
		$slug = Str::slug($request->name);
		$slug = Str::slug($request->name_ar);
		if ($request->status == '')
		{
			$status=0;
		}
		else{
			$status=1;

		}
	$data= new Manufacturer();

         $images=$request->file('images');
         $name_gen= hexdec(uniqid());
         $image_ext=strtolower($images->getClientOriginalExtension());
         $image_name=$name_gen.'.'.$image_ext;
         $up_location='Backend/images/';
         $last_img=$up_location.$image_name;
         $images->move(public_path($up_location),$image_name);
		 $data->image =$image_name;
		 $data->name=$request->name;
		 $data->name_ar=$request->name_ar;
		 $data->slug=$slug;
		 $data->status=$status;
		 $data->abbreviation_ar=$request->abbreviation_ar;
		 $data->abbreviation=$request->abbreviation;
		 $data->save();
	return redirect('admin/vendor');
	}

    public function edit($id)
	{
		$manufacturer=Manufacturer::findOrFail($id);
		
		return view('Admin.manufacturer.edit',compact('manufacturer'));
	}
    public function update(Request $request){
		$res=Manufacturer::find($request->id);
		$image=$request->file('images');
		$slug = Str::slug($request->input('title'));
		$slug = Str::slug($request->input('title_ar'));
		if ($request->input('status') == '')
		{
			$status=0;
		}
		else{
			$status=1;

		}
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->image = $image_name;
        }
		$res->name=$request->input('title');
		$res->name_ar=$request->input('title_ar');
		$res->slug=$slug;
		$res->abbreviation=$request->input('abbreviation');
		$res->abbreviation_ar=$request->input('abbreviation_ar');
		$res->status=$status;
        $res->save();
		return redirect('admin/vendor');
		}
	public function delete($id)
	{
        Manufacturer::findOrFail($id)->delete();
	   return redirect()->back();

	}
   
}
