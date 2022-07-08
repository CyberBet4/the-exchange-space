<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// AUTHENTICATED ROUTES
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
