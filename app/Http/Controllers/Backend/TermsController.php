<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Terms;
use DB;

class TermsController extends Controller
{
    public function index()
    {   
        $data = Terms::all();
        $array = compact('data');
        return view('Admin.terms-conditions.index',compact('data'));
    }
    public function create()
    {
        return view('Admin.terms-conditions.add');
    }
    public function store(Request $request)
    {

        $data = new Terms;
        $data->title = $request->post('title');
        $data->sub_heading = $request->post('sub_heading');
        $data->description = $request->post('description');
        $data->title_ar = $request->post('title_ar');
        $data->sub_heading_ar = $request->post('sub_heading_ar');
        $data->description_ar = $request->post('description_ar');
        $data->save();
        $request->session()->flash('message', ' successfully added. Thank you');
        return redirect('/admin/terms-conditions');
    }

    public function view(Request $request)
    {
        $id = $request->id;
        $data = Terms::where('id',$id)->first();
        return view('terms-conditions.view',compact('data'));
        
    }

    public function edit($id)
    {
        $contentDetails=Terms::findOrFail($id);
        // $data = Terms::find($id);
            // $contentDetails = Terms::where('id', $id)->get();
            // $contentId=!empty($contentDetails->id)?$contentDetails->id:"";
            // $array = compact('data', 'contentDetails');
            // return view('admin.terms-conditions.edit')->with($array);
        
            return view('Admin.terms-conditions.edit',compact('contentDetails'));
    }


    public function update(Request $request)
    {

        $res=Terms::find($request->id);
        $res->title = $request->input('title');
        $res->sub_heading = $request->input('sub_heading');
        $res->description = $request->input('description');
        $res->title_ar = $request->input('title_ar');
        $res->sub_heading_ar = $request->input('sub_heading_ar');
        $res->description_ar = $request->input('description_ar');
        $res->save();
        return redirect('admin/terms-conditions');
    }

    public function Status(Request $request, $status, $id)
    {
        // $data = TermsModel::find($id);
        // $data->status = $status;
        // $data->save();
        return redirect('Admin/index');
    }
    public function destroy($id)
    {
        $data = Terms::find($id);
        if (!is_null($data)) {
            $data->delete();
        }
        return redirect()->back();
    }
}
