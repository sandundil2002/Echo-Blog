<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, "index"])->name('home');
Route::get('/login-signup', [HomeController::class, 'showLoginSignupForm'])->name('loginSignup');
Route::get('/user-profile', [HomeController::class, 'userProfile'])->name('userProfile');
Route::get('/article-write', [HomeController::class, 'articleWrite'])->name('articleWrite');
Route::get('/articles/category/{category}', [HomeController::class, 'filterByCategory'])->name('filterByCategory');
Route::post('/checkUser', [UserController::class, 'checkUser'])->name('checkUser');
Route::post('/login-signup', [UserController::class, 'saveUser'])->name('saveUser');
Route::post('/article-write', [PostController::class, 'savePost'])->name('savePost');
Route::get('/user-profile', [PostController::class, 'userArticles'])->name('articleView');
Route::delete('/article/{id}', [PostController::class, 'deleteArticle'])->name('deleteArticle');
Route::get('/user-profile/{id}', [PostController::class, 'readArticle'])->name('readArticle');
Route::get('/article-view/{id}', [PostController::class, 'readArticle'])->name('articleView');