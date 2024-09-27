<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "index"])->name('home');
Route::get('/login-signup', [HomeController::class, 'showLoginSignupForm'])->name('loginSignup');