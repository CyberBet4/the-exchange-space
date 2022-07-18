<?php

namespace App\Http\Controllers;

use App\Mail\DepositRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FundController extends Controller
{
    // get when user click on fund button and present message
    public function deposit(Request $request)
    { 
        auth()->user()->active_swap = auth()->user()->active_swap+1;
        $amount = $request->amount;
        $wallet = $request->walletid;
        $coin = $request->coinname;
        $cointype = $request->cointype;
        $usercoin = $request->usercoin;
        
        $user = auth()->user();

        Mail::to($user->email)->send(new DepositRequest($user, $amount, $wallet, $cointype, $usercoin, $coin));

        // dd($request->all());

        auth()->user()->save();
        return redirect()->route('dashboard')->with('message', 'Completed! Your deposit will be approved when confirmed!');
    }
}
