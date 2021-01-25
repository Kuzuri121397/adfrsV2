<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function register(){

    	return view('Pages/register');
    }

    public function contactus(){

    	return view('Pages/contactus');
    }
    public function aboutus(){

    	return view('Pages/aboutusPage');
    }
}
