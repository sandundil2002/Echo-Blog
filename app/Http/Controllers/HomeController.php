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

    public function userProfile()
    {
        return view('pages.userProfile');
    }

    public function articleView()
    {
        return view('pages.articleView');
    }

}
