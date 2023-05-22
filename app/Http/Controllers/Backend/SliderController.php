<?php
namespace App\Http\Controllers\Backend;
use App\Models\LiveProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index(){
		$slider=Slider::all();
		return view('Admin.home-slider.index',compact('slider'));
	
}

public function create(){
		
	return view('Admin.home-slider.add');
	
}
public function store(Request $request){
	$request->validate([
		'images' => 'required',
		
	  ]);
	  
	$data= new Slider();

         $images=$request->file('images');
         $name_gen= hexdec(uniqid());
         $image_ext=strtolower($images->getClientOriginalExtension());
         $image_name=$name_gen.'.'.$image_ext;
         $up_location='Backend/images/';
         $last_img=$up_location.$image_name;
         $images->move(public_path($up_location),$image_name);
		 $data->images =$image_name;
		 $data->title=$request->title;
		 $data->short_description=$request->short_description;
		 $data->title_ar=$request->title_ar;
		 $data->short_description_ar=$request->short_description_ar;
		 $data->save();
	return redirect('admin/slider');
	}

	public function edit($id)
	{
		$slider=Slider::findOrFail($id);
		
		return view('Admin.home-slider.edit',compact('slider'));
	}

	public function update(Request $request){
		$res=Slider::find($request->id);
		$image=$request->file('images');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->images = $image_name;
        }
		$res->title=$request->input('title');
		$res->short_description=$request->input('short_description');
		$res->title_ar=$request->input('title_ar');
		$res->short_description_ar=$request->input('short_description_ar');
        $res->save();
		return redirect('admin/slider');
		}
	public function delete($id)
	{
       Slider::findOrFail($id)->delete();
	   return redirect()->back();

	}
}


    