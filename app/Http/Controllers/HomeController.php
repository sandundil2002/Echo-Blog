<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view('pages.index');
    }

    public function showLoginSignupForm()
    {
        return view('pages.loginSignup');
    }

}
