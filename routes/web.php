<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes([
		Route::get('/profile/{user}', 'PageController@profile')->name('profile'),


]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('questions', 'QuestionsController');

Route::resource('answers', 'AnswersController', ['except' => ['index', 'show', 'create']]);

//Route::get('/profile/{user}', 'PageController@profile')->name('profile');

Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@sendcontact');
Route::get('/upload','UploadController@getupload')->name('upload');
Route::post('/upload','UploadController@postupload');

Route::get('./github/{username}','ApiController@github')->name('github');
Route::get('/weather','ApiController@weather')->name('weather');
