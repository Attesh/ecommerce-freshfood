<?php

namespace App\Http\Controllers\Backend;
use App\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class DocumentController extends Controller
{
    //
	
	
	public function index(){
		$document=Document::all();
		return view('Admin.downloads.index',compact('document'));
	
}
	public function create(){
		
	return view('Admin.downloads.add');
	
}
	public function store(Request $request){
			$file=$request->file('document_name');
			if($file){
			$name_gen= hexdec(uniqid());
			$file_ext=strtolower($file->getClientOriginalExtension());
			$file_name=$name_gen.'.'.$file_ext;
			$up_location='Backend/documents/';
			$last_img=$up_location.$file_name;
			$file->move(public_path($up_location),$file_name);
    Document::insert([
	'document_name'=>$file_name,
	'title' => $request->input('title'),
	'created_at'=>Carbon::now(),
	]);
			}
    Document::insert([
	'title' => $request->input('title'),
	'created_at'=>Carbon::now(),
	]);
	return redirect('admin/document');
	}
	public function edit($id)
	{
		$document=Document::findOrFail($id);
		return view('Admin.downloads.edit',compact('document'));
	}

	// public function update(Request $request){
	// dd($request->all());
	// }
	public function update(Request $request){
			$res=Document::find($request->id);
			$file=$request->file('document_name');
			if($file){
			$name_gen= hexdec(uniqid());
			$file_ext=strtolower($file->getClientOriginalExtension());
			$file_name=$name_gen.'.'.$file_ext;
			$up_location='Backend/documents/';
			$last_img=$up_location.$file_name;
			$file->move(public_path($up_location),$file_name);
			$res->document_name=$file_name;
			}
				$res->title=$request->input('title');
				$res->save();
		return redirect('admin/document');
		}
	public function delete($id)
	{
		Document::findOrFail($id)->delete();
	   return redirect()->back();

	}
	
}
