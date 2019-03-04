<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeControlooer extends Controller
{
    //Home Page
    public function home(){
    	return view('home');
    }
     //rooms Page
    public function rooms(){
    	return view('aboutus');
    }
      //rooms gallery
    public function gallery(){
    	return view('gallery');
    }
      //rooms contact
    public function contact(){
    	return view('contact');
    }
          //rooms info
    public function info(){
        return view('roominf');
    }
    //cab services
    public function cab(){
        return view('findcabe');
    }
}
