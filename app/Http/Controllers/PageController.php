<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class PageController extends Controller
{
    //
	public function __construct() {
		$this->middleware('auth');
	}

	public function profile($id){
		//$user = User::findOrFail($id); or
		$user = User::with(['questions','answers'])->find($id);
		return view('profile')->with('user',$user);
	}

	public function contact(){
		return view('contact');
	}
	public function sendcontact(Request $request){
		//
		$this->validate($request, [
				'name' =>'required',
			'email'=>'required|email',
			'subject'=>'required|min:3',
			'message'=>'required|min:10'
		]);

		Mail::to('dulshaniko7@gmail.com')->send(new ContactForm($request));
		return redirect('/');

	}
}
