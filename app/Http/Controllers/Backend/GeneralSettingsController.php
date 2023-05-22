<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class GeneralSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shop_data = Settings::get()->first();
    	return view('Admin.Settings.index',['shop'=>$shop_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        // return $request->id;
        $data=Settings::findorFail($request->id);
    
        $data->shop_address=$request->shop_address;
        $data->shop_address_ar=$request->shop_address_ar;
        $data->shop_phone=$request->shop_phone;
        $data->shop_fax=$request->shop_fax;
        $data->shop_email=$request->shop_email;
        $data->shop_website=$request->shop_website;
        $data->shop_lat=$request->shop_lat;
        $data->shop_lng=$request->shop_lng;
        $data->shop_name=$request->shop_name;
        $data->shop_name_ar=$request->shop_name_ar;
        $data->shop_description=$request->shop_description;
        $data->shop_description_ar=$request->shop_description_ar;
        $data->shop_fb=$request->shop_fb;
        $data->shop_tw=$request->shop_tw;
        $data->shop_li=$request->shop_li;
        $data->shop_gp=$request->shop_gp;
        $data->shop_in=$request->shop_in;
        $data->shop_yt=$request->shop_yt;
        $data->shop_logo=$request->shop_logo;
        $data->shop_footer_logo=$request->shop_footer_logo;
        $data->off_day_title=$request->off_day_title;
        $data->off_day_title_ar=$request->off_day_title_ar;
        $data->off_day_logo=$request->off_day_logo;
        $data->save();
      

        return redirect()->back()->with('success', 'Add new data has been save successfully!' ,'errors','PLease all field are required');
   
    }

   
}
