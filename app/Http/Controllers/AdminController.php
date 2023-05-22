<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\RegisteredMembers;
use App\Models\SubmittedContact;
use App\Models\Trusty;
use App\Models\subscribe;
use Hash;
use Auth;
use Carbon\Carbon;
class AdminController extends Controller
    {
        
        public function adminlogin(){
            return view('Admin.pages-login');
        }

        public function SingIn(Request $request)
            {     
                $check = $request->all();
                    if( $check['email']!=null){
                        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
          
                            return redirect()->route('admin.dashboard')->with('error', 'admin Login Successfully');
                        }
       
                    else {
    
                        return back()->with('error', 'Invaild Email Or Password');
                    }

            }

            else{
                return back()->with('error', 'Invaild Email Or Password');
            }
        }

        public function index(){
            // $member = RegisteredMembers::count();
            // $ticket = SubmittedContact::count();
            // $trusty = Trusty::count();
            return view('Admin.index');
        }          
        public function admin_usersprofile(){
          return view('Admin.users-profile');
        }
        public function update(Request $request){
            $res=Admin::find($request->id);
            $res->name=$request->input('name');
            $res->company=$request->input('company');
            $res->job=$request->input('job');
            $res->country=$request->input('country');
            $res->address=$request->input('address');
            $res->phone=$request->input('phone');
            $res->email=$request->input('email');
            $res->twitter=$request->input('twitter');
            $res->facebook=$request->input('facebook');
            $res->instagram=$request->input('instagram');
            $res->linkedin=$request->input('linkedin');
            $image=$request->file('image');
            if($image){
                $name_gen= hexdec(uniqid());
		        $image_ext=strtolower($image->getClientOriginalExtension());
                $image_name=$name_gen.'.'.$image_ext;
                $up_location='Backend/images/';
                $last_img=$up_location.$image_name;
                $image->move(public_path($up_location),$image_name);
                $res->image=$image_name;
            }
            $res->save();
                return redirect('admin/dashboard');
            }
        public function USerChangePassword(Request $request)
        {
            $request->validate([
                'password'=>'required|',
                'confirmpassword'=>'required|same:password',                  
            ]);
            $res=Admin::find($request->id);
            $res->password = Hash::make($request->password);
            $res->save();
           return redirect('admin/dashboard');
        }
        public function delete_admin_img($id){
            $res=Admin::find($id);
            $res->image = null;
            $res->save();
            return redirect('admin/dashboard');
        }

        public function Logout()
            {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'Admin Logout Successfully');
            }
 
}
