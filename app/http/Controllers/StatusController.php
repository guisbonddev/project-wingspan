<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    // Function for NAS Status
    public function view(){

    	$nas = \App\NAS::get();
    	$ground = \App\Ground::get();
    	$delay = \App\Delay::get();

    	$reasons = \App\Reason::get();

    	return view('welcome', compact('nas','ground','delay','reasons'));

    }

    // Function for Ground Stops

    // Function for Delay Info 
}
