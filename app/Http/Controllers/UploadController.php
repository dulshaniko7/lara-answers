<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller {
	//
	public function getupload() {
		return view('upload');
	}

	public function postupload(Request $request) {
		$user = Auth::user();
		$file = $request->file('image');
		$filename = uniqid($user->id . "_") . "." . $file->getClientOriginalExtension();
		Storage::disk('public')->put($filename, File::get($file));
		//Storage::disk('s3')->put($filename, File::get($file),'public');
		$user->image = $filename;
		$user->save();

		return view('upload-completed')->with('filename', $filename)->with('user', $user);
	}
}
