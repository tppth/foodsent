<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class FrontendController extends Controller
{
    //
    public function main($value='')
    {
    	# code...
    	return view('frontend.main');
    }

    public function register($value='')
    {
    	# code...
    	return view('frontend.register');
    }

    public function partner_register($value='')
    {
    	# code...
    	return view('frontend.beapartner');
    }

    public function aboutus($value='')
    {
    	# code...
    	return view('frontend.aboutus');
    }

    public function contactus($value='')
    {
    	# code...
    	return view('frontend.contactus');
    }

    public function restaurantadd($value='')
    {
        # code...
        $cities = City::all();
        return view('frontend.restaurantadd', compact('cities'));
    }

    public function foodadd($value='')
    {
        # code...
        return view('frontend.foodadd');
    }

    public function partnerprofile($value='')
    {
        # code...
        return view('frontend.partnerprofile');
    }

    public function restaurantlist($value='')
    {
        # code...
        return view('frontend.restaurantlist');
    }

    public function restaurantedit($value='')
    {
        # code...
        return view('frontend.restaurantedit');
    }

    public function customerprofile($value='')
    {
        # code...
        return view('frontend.customerprofile');
    }

    public function shoplist($value='')
    {
        # code...
        return view('frontend.shoplist');
    }

    public function shopfood($value='')
    {
        # code...
        return view('frontend.shopfood');
    }

    public function cart($value='')
    {
        # code...
        return view('frontend.cart');
    }

    public function checkout($value='')
    {
        # code...
        return view('frontend.checkout');
    }
}
