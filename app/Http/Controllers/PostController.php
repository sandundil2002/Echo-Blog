<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Psy\Readline\Hoa\Console;
use Session;
use Validator;
use function Laravel\Prompts\alert;

class PostController extends Controller
{
    public function savePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required',
            'contents' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $post = new Posts();
            $post->user_id = Session::get('userId');
            $post->title = $request->title;
            $post->category = $request->category;
            $post->content = $request->contents;
            $post->author = Session::get('userName');

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('uploads/images', 'public');
                $post->image = $imagePath;
            }

            $post->save();
            return redirect()->intended('/user-profile')->with('success', 'Post created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was an error creating the post!');
        }
    }

    public function userArticles()
    {
        try {
            $userId = Session::get('userId');
            $articles = Posts::where('user_id', $userId)->get();
            return view('pages.userProfile', compact('articles'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while retrieving posts.');
        }
    }
}
