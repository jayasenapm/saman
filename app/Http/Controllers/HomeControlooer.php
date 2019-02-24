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
}
