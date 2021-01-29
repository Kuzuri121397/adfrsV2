<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home(){

		$title = 'Welcome to NBI Automated Document Filing and Records System';
		//return view('Pages/home', compact('title'));
        return view('Pages/home')->with('title', $title);
	}

    public function register(){


    	return view('Pages/register');
    }

    public function contactus(){

    	$contactTitle = 'This is the Contact Page';
    	//return view('Pages/contactus', compact('contactTitle'));
        return view('Pages/contactus')->with('contactTitle', $contactTitle);
    }
    public function aboutus(){

    	$aboutTitle= 'This is the About Us Page';
    	//return view('Pages/aboutusPage', compact('aboutTitle'));
        return view('Pages/aboutusPage')->with('aboutTitle', $aboutTitle);
    }

    public function services(){

        
        $servicesList = array('servicesTitle' => 'Services',
            'services' => ['Bills', 'Vouchers', 'Incoming Communication Letter', 'Outgoing Communication Letter', 'Logs']);
        return view('Pages/services')->with($servicesList);

        
    }
}
