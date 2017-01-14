<?php

namespace QuizMe\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }

    public function profile(){
    	return view('profile');
    }

    public function lessons(){
    	return view('lessons');
    }

    public function index()
    {
        return view('testpage');
    }

    public function notlogin()
    {
    	return view('auth/login');
    }
}
    

