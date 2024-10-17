<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function saveUser(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('userProfile')->with('success', 'User created successfully.');
    }

    public function checkUser(Request $request)
    {
        $request->validate([
            'loginEmail' => 'required|email',
            'loginPassword' => 'required',
        ]);

        $user = Users::where('email', $request->loginEmail)->first();

        if ($user && Hash::check($request->loginPassword, $user->password)) {
            Session::put('userId', $user->id);
            Session::put('userName', $user->name);
            return redirect()->intended('/user-profile');
        }

        return back()->withErrors([
            'loginEmail' => 'The provided credentials do not match our records.',
        ]);
    }
}
