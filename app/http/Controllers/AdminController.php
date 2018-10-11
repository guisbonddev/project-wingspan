<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function reasons(){

    	$reasons = \App\Reason::get();

    	return view('admin.reasons', compact('reasons'));
    }

    public function create(){
    	$reasons = \App\Reason::get();
    	
    	return view('admin.create', compact('reasons'));

    }
}
