<?php
  
namespace App\Http\Controllers\Membership;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Orders;
use Hash;
Use Response;
use DB;
use Illuminate\Support\Facades\Password;

use App\Models\RegisteredMembers;
class MembershipController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('membership.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        $email_check =User::all();
        // return $email_check;
        return view('membership.signup',compact('email_check'));
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Login(Request $request)
{
   
$check = $request->all();

// $member=Membership::where('id',Auth::guard('member')->id);
if( $check['email']!=null){
if (Auth::guard('member')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
    // return redirect()->route('member.dashboard')->with('error', 'Member Login Successfully');
    // return Response::json(array('msg' => 'true'));
  
    return response()->json([
        "status" => true, 
        
        // "redirect" => route("member.dashboard")
    ]);
}

else {
    return response()->json([
        "status" => false,
        "errors" => ["Invalid credentials"]
    ]);

}


}
}
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function member_details(){
        $id=Auth::guard('member')->user()->id;

        $record = DB::table('orders')
        ->leftjoin('users', 'orders.customer_id', '=', 'users.id')
        ->leftjoin('order_details', 'orders.id', '=', 'order_details.order_id')
        ->where('users.id', $id)
        ->get();
        return view('membership.member-detail',compact('record'));
     }

     public function orders(){
        $id=Auth::guard('member')->user()->id;
        $record = DB::table('orders')
        ->leftjoin('users', 'orders.customer_id', '=', 'users.id')
        ->leftjoin('order_details', 'orders.id', '=', 'order_details.order_id')
        ->where('users.id', $id)
        ->get();
     }
     public function orders_details($id){
        $record=DB::table('orders')->where('id',$id)->first();
        // $record = DB::table('orders')
        // ->leftjoin('users', 'orders.customer_id', '=', 'users.id')
        // ->leftjoin('order_details', 'orders.id', '=', 'order_details.order_id')
        // ->where('users.id', $id)
        // ->get();
        return view('membership.order-detail',compact('record'));
     }
     public function orders_details_delete($id){
        DB::table('orders')->where('id', $id)->delete();
		DB::table('order_details')->where('order_id', $id)->delete();
	   return redirect('membership/dashboard');
     }

    public function store(Request $request)
    {  
    // return $request;

        // $validator= $request->validate([
        //     'first_name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|confirmed|min:6',
        // ]);

        // $data = $request->all();
        // $check = $this->create($data);
   
  $obj = new User();
  $obj->first_name=$request->first_name;
  $obj->last_name=$request->last_name;
  $obj->email=$request->email;
  $obj->phone=$request->phone;
  $obj->address=$request->address;
  $obj->gender=$request->gender;
  $obj->dob=$request->dob;
  $obj->password=Hash::make($request['password']);
  $obj->save();
        return redirect("/membership/login")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('/membership/login');
        // return redirect->back()->withSuccess('Opps! You do not have access');

        }
  
        return redirect->back()->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'first_name' => $data['first_name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'last_name' => $data['last_name'],
        'address' => $data['address'],
        'phone' => $data['phone'],
        'gender' => $data['gender'],
        'dob' => $data['dob'],
      ]);
    }

    public function update(Request $request){
		$res=User::find($request->id);
		$res->first_name=$request->input('first_name');
        $res->last_name=$request->input('last_name');
		$res->address=$request->input('address');
		$res->phone=$request->input('phone');
		// $res->email=$request->input('email');
		$res->dob=$request->input('dob');
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
		return back();
		}

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function USerChangePassword(Request $request)
    {
           $request->validate([
               'password'=>'required|',
               'confirmpassword'=>'required|same:password',
                 
           ]);
              $res=User::find($request->id);
              $res->password = Hash::make($request->password);
              $res->save();
          return redirect('membership/dashboard');
      }
      
      public function forgetpassword()
      {
          return view('membership.forgotpassword');
      }
      public function forgetpasswordreset(Request $request)
      {
        // forgetpassword

        $request->validate([
            'email' => ['required', 'email'],
        ]);
        // return $request;

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    
      }
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }


    public function userEmailCheck(Request $request)
    {
    
    // return $request;
        $data = $request->all(); // This will get all the request data.
        // return $data;
        $userCount=User::where('email',$data['email'])
        ;
        // return response()->json([
        //     'success' => 'Record deleted successfully!'
        // ]);
        // $userCount = Members_profile::where('email', $data['email']);
        if ($userCount->count()) {
            $subcategory="found";
            return json_encode($subcategory);
        // 	return response()->json([
        //         'success' => 'Record deleted successfully!'
        //     ]);
        } else {
            $subcategory="nothingfound";
            return json_encode($subcategory);
    
        // 	return response()->json([
        // //         'failed' => 'Record deleted successfully!'
        //     ]);
        }
    }
    public function delete_member_img($id){
        $res=User::find($id);
            $res->image = null;
            $res->save();
	   return redirect('membership/dashboard');
    }

}