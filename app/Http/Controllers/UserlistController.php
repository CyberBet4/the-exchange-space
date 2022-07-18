<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UserlistController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->is_admin == 1){
            $users = User::all();
            return view('pages.admin.user-list', compact('users'));
        }else{
            return redirect()->route('dashboard');
        }
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->trx = $request->trx;
        $user->fwt = $request->fwt;
        $user->tpc = $request->tpc;
        $user->completed_swap = $user->completed_swap + 1;
        if($user->save()){
            return redirect()->route('user-list')->with('success', 'User updated successfully');
        }else{
            return redirect()->route('user-list')->with('error', 'User update failed');
        }
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        if($user->delete()){
            return redirect()->route('user-list')->with('success', 'User deleted successfully');
        }else{
            return redirect()->route('user-list')->with('error', 'User could not be deleted');
        }
    }
}
