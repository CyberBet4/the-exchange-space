<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // open profile page
    public function index()
    {
        return view('pages.profile');
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());
        // validate form data
        // $this->validate($request, [
        //     // 'address' => 'required|string',
        // ]);
        
        $user = auth()->user();
        $user->address = $request->address;
        
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }

        if($user->save()){
            return redirect()->route('profile')->with('success', 'Profile updated successfully');
        }else{
            return redirect()->route('profile')->with('error', 'Profile update failed');
        }
        
        // return back()->with('success', 'Profile updated successfully');
    }
}
