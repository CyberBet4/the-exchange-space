<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LogoutController extends Controller
{
    // logs user out
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
