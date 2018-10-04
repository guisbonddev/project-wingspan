<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    // Function for NAS Status
    public function view(){

    	$nas_r = \App\NAS::get();
    	$reasons = \App\Reason::get();

    	return view('welcome', compact('nas_r','reasons'));


    }

    // Function for Ground Stops

    // Function for Delay Info 
}
