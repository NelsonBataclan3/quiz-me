<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


	Route::get('/', function () {
	    return view('auth/login');
	});

	Route::get('welcome', 'PagesController@welcome');

	Route::post('welcome', function(){
		return view('welcome');
	});

	Route::get('profile', 'PagesController@profile');

	Route::get('lessons', 'PagesController@lessons');

	Route::get('home', function(){
		return view('home');
	});

//add
		Route::get('admin', function(){
		return view('admin');
	});
		//end

		Route::get('teacher', function(){
		return view('teacher');
	});


	Route::get('lessons', function(){
		return view('lessons');
	});

	Route::get('register', function(){
		return view('auth/register');
	});


	Auth::routes();

	Route::get('/home', 'PagesController@index');

	Route::get('/uploadfile', 'FileuploadingController@index');
	Route::post('/uploadfile', 'FileuploadingController@showfileupload');

