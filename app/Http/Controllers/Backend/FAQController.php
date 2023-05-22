<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
// use App\Models\Admin\FAQDetail;

use App\Models\Product;
use DB;

class FAQController extends Controller
{
    public function index()
    {
        $data = FAQ::all();
        return view('Admin.faq.index',compact('data'));
    }
    public function create()
    {
        return view('Admin.faq.add');
    }
    public function store(Request $request)
    {

        
      
        return redirect('Admin/faq');
    }

    public function delete_detail_ajax(Request $request)
    {
        return redirect('Admin/term');
    }

    public function edit($id)
    {
        // $data = FAQ::find($id);
        // if (!is_null($data)) {
        //     $contentDetails = FAQDetail::where('content_id', $data->id)->get();
        //     // $contentId=!empty($contentDetails->id)?$contentDetails->id:"";
        //     $array = compact('data', 'contentDetails');
        //     return view('admin.faq.edit')->with($array);
        // } else {
        //     return redirect('admin/term');
        // }
        return view('Admin.faq.edit');
    }


    public function update(Request $request, $id)
    {

        // $data = FAQ::find($id);
        // $data = FAQ::where('id', $id)->first();

        // $data->title = $request->post('title');
        // $data->sub_heading = $request->post('sub_heading');
        // $data->update();
        // $list_id = $request->post('list_id');
        // $detail_question = $request->post('detail_question');
        // $detail_answer = $request->post('detail_answer');
        // if ($detail_question) {
        //     foreach ($detail_question as $key => $point) {
        //         if (isset($list_id[$key])) {
        //             $data = FAQDetail::find($list_id[$key]);
        //             $data->question = $detail_question[$key];
        //             $data->answer = $detail_answer[$key];
        //             $data->update();
        //         } else {
        //             if (!empty($point)) {
        //                 $new_data = new FAQDetail;
        //                 $new_data->content_id = $id;
        //                 $new_data->question = $detail_question[$key];
        //                 $new_data->answer = $detail_answer[$key];
        //                 $new_data->save();
        //             }
        //         }
        //     }
        // }
        // $request->session()->flash('message', ' Successfully Updated Data ');
        return redirect('Admin/faq');
    }

    public function Status(Request $request, $status, $id)
    {
        // $data = FAQ::find($id);
        // $data->status = $status;
        // $data->save();
        return redirect('Admin/faq');
    }
    public function destroy($id)
    {
        // $data = FAQ::find($id);
        // if (!is_null($data)) {
        //     $data->delete();
        // }

        return redirect('Admin/faq');
    }

    public function status_faq_data(Request $request,$status,$id)
    {
        $data = FAQ::find($id);
       
        $data->status=$status;
        $data->save();
        return redirect('admin/faq');
    }
}
