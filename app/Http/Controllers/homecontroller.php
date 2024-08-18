<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view('home');
    }
    public function shop(){
        return view('shop');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function services(){
        return view('services');
    }
    public function blog(){
        return view('blog');
    }
    public function contactus(){
        return view('contactus');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
}
