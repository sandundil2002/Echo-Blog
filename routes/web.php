<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "index"])->name('home');
Route::get('/login-signup', [HomeController::class, 'showLoginSignupForm'])->name('loginSignup');
Route::get('/user-profile', [HomeController::class, 'userProfile'])->name('userProfile');
Route::get('/article-view', [HomeController::class, 'articleView'])->name('articleView');
Route::get('/article-write', [HomeController::class, 'articleWrite'])->name('articleWrite');
Route::post('/login-signup', [UserController::class, 'saveUser'])->name('saveUser');