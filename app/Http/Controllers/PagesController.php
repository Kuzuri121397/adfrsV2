<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){

		$title = 'Welcome to NBI Automated Document Filing and Records System';
		return view('Pages/home', compact('title'));
	}

    public function register(){


    	return view('Pages/register');
    }

    public function contactus(){

    	$contactTitle = 'This is the Contact Page';
    	return view('Pages/contactus', compact('contactTitle'));
    }
    public function aboutus(){

    	$aboutTitle= 'This is the About Us Page';
    	return view('Pages/aboutusPage', compact('aboutTitle'));
    }
}
