<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// UNAUTHENTICATED ROUTES

Route::get('/', function () {
    return view('unauth.pages.home');
});

Route::get('/login', function () {
    return view('unauth.pages.login');
});

Route::get('/register', function () {
    return view('unauth.pages.register');
});


// AUTHENTICATED ROUTES
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
