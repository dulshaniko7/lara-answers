<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class ApiController extends Controller {
	//

	public function github($user) {
		$client = new GuzzleClient();
		$response = $client->get("https://api.github.com/users/$user");
		$body = $response->getBody();

	}


	public function weather() {
		return view('frontend.weather');
	}
	public function front(){
		return view('frontend.index');
	}
}
