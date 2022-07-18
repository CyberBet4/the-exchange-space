<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    // show login form
    public function showLoginForm()
    {
        return view('unauth.pages.login');
    }

    // Logs in the user if the credentials are valid.
    public function authUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only(['email', 'password']))) {
            if(auth()->user()->is_admin) {
                return redirect()->route('user-list');
            } else {
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid Login Details.',
        ]);
    }
}
