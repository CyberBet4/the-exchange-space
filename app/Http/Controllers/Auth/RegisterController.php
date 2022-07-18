<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use App\Models\User;
// use App\Models\socialProvider;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    //show registration form
    public function showRegistrationForm()
    {
        return view('unauth.pages.register');
    }

    //register a new user
    public function store(Request $request)
    {
        //validate form data
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);

        //create a new user
        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 0,
        ]);

        //login user
        auth()->attempt($request->only(['email', 'password']));

        //redirect to login page
        return redirect()->route('dashboard');
    }
}
