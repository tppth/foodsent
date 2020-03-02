<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function dashboard($value='')
    {
    	# code...
    	return view('backend.dashboard');
    }

    public function foodconfirmpost($value='')
    {
    	# code...
    	return view('backend.foodconfirmpost');
    }

    public function shopconfirmpost()
    {
    	return view('backend.shopconfirmpost');
    }
}
