<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


use App\Models\Pages;
use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    //
    public function index(){
        // $product = Product::all();
		$pages= Pages::all(); 

        return view('Admin.page.index',compact("pages"));
    }

    public function edit($id)
	{
		$pages=Pages::findOrFail($id);
		// return $product;
		return view('Admin.page.edit',compact('pages'));
	}

    public function update(Request $request){
		$res=Pages::find($request->id);
        // $slug = Str::slug($request->input('page_title'));

		$image=$request->file('images');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->page_image = $image_name;
        }
		$res->page_title=$request->input('page_title');
		$res->page_title_arr=$request->input('page_title_arr');
		$res->page_short_description=$request->input('page_short_description');
		$res->page_short_description_arr=$request->input('page_short_description_arr');
		$res->page_description=$request->input('page_description');
		$res->page_description_arr=$request->input('page_description_arr');
		// $res->page_slug=$slug;
        $res->save();
		return redirect('admin/pages');
		}
	public function delete($id)
	{
       Pages::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
