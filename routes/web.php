<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SwapRoomController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TransactionController;
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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authUser']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// AUTHENTICATED ROUTES
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/user-list', [UserlistController::class, 'index'])->name('user-list');
Route::post('/user-list', [UserlistController::class, 'update']);
Route::get('/user-list/{id}', [UserlistController::class, 'get_singleuser']);
Route::delete('/user-delete/{id}', [UserlistController::class, 'destroy'])->name('user-delete');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/dashboard/withdraw', [WithdrawController::class, 'withdraw'])->name('withdraw');
Route::post('/dashboard/fund', [FundController::class, 'deposit'])->name('deposit');

Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/dashboard/profile', [ProfileController::class, 'updateProfile']);

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
Route::get('swap-room', [SwapRoomController::class, 'index'])->name('swap-room');
Route::get('swap-room/join', [SwapRoomController::class, 'joinRoom'])->name('join-room');