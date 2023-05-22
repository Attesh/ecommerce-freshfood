<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    // public function subscribe(){
    //     $data=Subscriber::all();
    //     return view('Admin.subscribe',compact('data'));
    // }
    public function subscribe()
    {
        $data = Subscriber::all();
        return view('Admin.subscribe',compact('data'));
    }

    public function status_subscribe_data(Request $request,$status,$id)
    {
        $data = Subscriber::find($id);
       
        $data->status=$status;
        $data->save();
        return redirect('admin/subscribe');
    }
}
