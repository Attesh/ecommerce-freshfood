<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubmittedContact;

class SubmittedContactController extends Controller
{
    //
    public function index(){
		$contact=SubmittedContact::all();
		return view('Admin.submitted-contact.index',compact('contact'));
	
}


    public function view($id)
	{
		$contact=SubmittedContact::findOrFail($id);
		return view('Admin.submitted-contact.details',compact('contact'));
	}
    public function delete($id)
	{
		
		SubmittedContact::findOrFail($id)->delete();
	   return redirect()->back();

	}
}
