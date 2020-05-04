<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
	public function profile($id){
		//$user = User::findOrFail($id); or
		$user = User::with(['questions','answers'])->find($id);
		return view('profile')->with('user',$user);
	}
}
