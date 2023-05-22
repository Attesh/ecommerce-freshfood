<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommitteeList;
use App\Models\CommitteeCategory;
use App\Models\SubCategory;
use App\Models\CommitteeMembers;
use DB;
class CommitteeListController extends Controller
{
    //
    public function index(){
        $list=CommitteeList::all();
		return view('Admin.committee-list.index',compact('list'));
	
}
public function create(){
         $category=CommitteeCategory::get();
    // $list=SubCategory::with('category')->get();

	return view('Admin.committee-list.add',compact('category'));
	
}
public function AjaxgeteCategory($category_id)
{
    $subcategory=SubCategory::where('category_id',$category_id)->orderBy('title','ASC')->get();
   return json_encode($subcategory);

}
public function store(Request $request){
    
    $cat_image=$request->cat_image; 
	if($cat_image){
		$cat_image=$request->cat_image;       
	 $name_gen= hexdec(uniqid());
	 $image_ext=strtolower($cat_image->getClientOriginalExtension());
	 $image_name=$name_gen.'.'.$image_ext;
	 $up_location='Backend/images/';
	 $last_img=$up_location.$image_name;
	 $cat_image->move(public_path($up_location),$image_name);
	 $category_id=$request->category_id;
	 $subcategory_id=$request->subcategory_id;
	$committee_id=CommitteeList::insertGetId([
   	'category_id'=>$request->category_id,
    'subcategory_id'=>$request->subcategory_id,
    'description'=>$request->description,
    'cat_image'=>$image_name,
    
	'created_at'=>Carbon::now(),
        
	]);
	}      
	else{
		$category_id=$request->category_id;
		$subcategory_id=$request->subcategory_id;
	   $committee_id=CommitteeList::insertGetId([
		  'category_id'=>$request->category_id,
	   'subcategory_id'=>$request->subcategory_id,
	   'description'=>$request->description,
	   
	   'created_at'=>Carbon::now(),
		   
	   ]);
	}
	 
	$items = $request->all('member');
	
	foreach($items as $key => $request)
	{
		for($i=0; $i<count($request); $i++){
			
			$member_image=$request[$i]['member_image'];   
			if($member_image){       
		$name_gen1= hexdec(uniqid());
		$image_ext1=strtolower($member_image->getClientOriginalExtension());
		$image_name1=$name_gen1.'.'.$image_ext1;
		$up_location='Backend/images/';
		$last_img1=$up_location.$image_name1;
		$member_image->move(public_path($up_location),$image_name1);	
		CommitteeMembers::insert([

			'committee_id'=>$committee_id,
			'category_id'=>$category_id,
			'subcategory_id'=>$subcategory_id,
			'member_name' => $request[$i]['member_name'],
			'member_title' => $request[$i]['member_title'],
			'member_image' => $image_name1,
			'created_at'=>Carbon::now(),
			]);
		}
	else{

			CommitteeMembers::insert([

			'committee_id'=>$committee_id,
			'category_id'=>$category_id,
			'subcategory_id'=>$subcategory_id,
			'member_name' => $request[$i]['member_name'],
			'member_title' => $request[$i]['member_title'],
			'member_image' => $image_name1,
			'created_at'=>Carbon::now(),
			]);

	}
	}
		
	}
	return redirect('admin/committee-list');
	}
    public function edit($id)
	{
           $category=CommitteeCategory::get();
           $subcategory=SubCategory::get();
		   $list=CommitteeList::findOrFail($id);
		   $id=$list->id;
		   $members=CommitteeMembers::where('committee_id',$id)->get();




		
		return view('Admin.committee-list.edit',compact('list','category','subcategory','members'));
	}
    public function update(Request $request){
		$res=CommitteeList::find($request->id);
		$category_id=$request->input('category_id');
		$subcategory_id=$request->input('subcategory_id');
		$another_id=$request->id;
		$res->category_id=$request->input('category_id');
		$res->subcategory_id=$request->input('subcategory_id');
		$res->description=$request->input('description');
		$image=$request->file('cat_image');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
        $res->cat_image = $image_name;
        }

        $res->save();





		$items = $request->all('member');
		DB::table('committee_members')->where('committee_id', $another_id)->delete();
		foreach($items as $key => $request)
		{
			for($i=0; $i<count($request); $i++){
			$member_image=$request[$i]['member_image'];          
			$name_gen1= hexdec(uniqid());
			$image_ext1=strtolower($member_image->getClientOriginalExtension());
			$image_name1=$name_gen1.'.'.$image_ext1;
			$up_location='Backend/images/';
			$last_img1=$up_location.$image_name1;
			$member_image->move(public_path($up_location),$image_name1);	
			CommitteeMembers::insert([
	
				'committee_id'=>$another_id,

				'category_id'=>$category_id,
				'subcategory_id'=>$subcategory_id,
				'member_name' => $request[$i]['member_name'],
				'member_title' => $request[$i]['member_title'],
				'member_image'=>$image_name1,
				'created_at'=>Carbon::now(),
				]);
			}
			
		}



		return redirect('admin/committee-list');
		}
public function delete($id)
	{
		CommitteeList::findOrFail($id)->delete();
		DB::table('committee_members')->where('committee_id', $id)->delete();
	   return redirect()->back();

	}
}
