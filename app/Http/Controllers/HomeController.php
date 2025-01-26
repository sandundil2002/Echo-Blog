<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class HomeController extends Controller{
    public function index(){
        try {
            $articles = Posts::all();
            return view('pages.index', compact('articles'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while retrieving articles.');
        }
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

    public function articleWrite()
    {
        return view('pages.articleWrite');
    }

    public function filterByCategory($category)
    {
        if ($category === 'All') {
            $articles = Posts::all();
        } else {
            $articles = Posts::where('category', $category)->get();
        }

        return view('pages.index', compact('articles'));
    }


}
