<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeBoard;

class NoticeBoardController extends Controller
{
    //
    public function index(){
		$notice=NoticeBoard::all();
		return view('Admin.noticeboard.index',compact('notice'));
	
}
public function view($id)
	{
		$notice=NoticeBoard::findOrFail($id);
		return view('Admin.noticeboard.details',compact('notice'));
	}
public function create(){
	$notice=NoticeBoard::all();
	return view('Admin.noticeboard.add',compact('notice'));
  
	
}
public function store(Request $request){
	 NoticeBoard::insert([
	'title'=>$request->title,
	'description'=>$request->description,
	'created_at'=>Carbon::now(),
	]);
	return redirect('admin/noticeboard');
	}
    public function edit($id)
	{
		$notice=NoticeBoard::findOrFail($id);
		return view('Admin.noticeboard.edit',compact('notice'));
	}
    public function update(Request $request){
		$res=NoticeBoard::find($request->id);
		$res->title=$request->input('title');
        $res->description=$request->input('description');
        $res->save();
		return redirect('admin/noticeboard');
		}
    public function delete($id)
	{
		
		NoticeBoard::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
