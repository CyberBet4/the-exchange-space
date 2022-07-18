<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    // controller for withdrawing funds from the user's account
    public function withdraw(){
        // get the user's wallet balance
        $trx = auth()->user()->trx;
        $fwt = auth()->user()->fwt;
        $tpc = auth()->user()->tpc;

        // get the user's withdrawal amount & wallet type
        $amount = request('amount');
        $wallet = request('wallet');


        // check if the user has enough funds to withdraw the amount
        if($wallet === "trx" && $trx > $amount){
            // subtract the amount from the user's account balance
            auth()->user()->trx -= $amount;
            // save the user's new account balance
            auth()->user()->save();
            // return a success message
            return redirect()->route('dashboard')->with('success', "Your request has been sent and is been processed, you'll receive your funds within 5 mins.");
        } 
        else if($wallet === "fwt" && $fwt > $amount){
            // subtract the amount from the user's account balance
            auth()->user()->fwt -= $amount;
            // save the user's new account balance
            auth()->user()->save();
            // return a success message
            return redirect()->route('dashboard')->with('success', "Your request has been sent and is been processed, you'll receive your funds within 5 mins.");
        } 
        else if($wallet === "tpc" && $tpc > $amount){
            // subtract the amount from the user's account balance
            auth()->user()->tpc -= $amount;
            // save the user's new account balance
            auth()->user()->save();
            // return a success message
            return redirect()->route('dashboard')->with('success', "Your request has been sent and is been processed, you'll receive your funds within 5 mins.");
        }
        
        else {
            // return a failure message
            return redirect()->route('dashboard')->with('error', 'You do not have sufficient funds to perform this operation!');
        }
    }
}
