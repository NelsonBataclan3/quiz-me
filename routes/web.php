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
    return view('login');
});

Route::get('welcome', 'PagesController@welcome');

Route::post('welcome', function(){
	return view('welcome');
});

Route::get('profile', 'PagesController@profile');

Route::get('lessons', 'PagesController@lessons');
Auth::routes();

Route::get('/home', 'HomeController@index');
