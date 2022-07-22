<?php

namespace App\Http\Controllers;

use App\Mail\DepositRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FundController extends Controller
{
    // get when user click on fund button and present message
    public function deposit(Request $request)
    { 
        
        $amount = $request->amount;
        $wallet = $request->walletid;
        $coin = $request->coinname;
        $cointype = $request->cointype;
        $usercoin = $request->usercoin;
        $address = "";
        $user = auth()->user();

        

        if(auth()->user()->save()){

            // update transaction table
            DB::table('transactions')->insert([
                'user_id' => auth()->user()->id,
                'amount' => $amount,
                'wallet' => $coin,
                'newwallet' => $usercoin,
                'address' => $address,
                'status' => 'pending',
            ]);

            auth()->user()->active_swap = auth()->user()->active_swap+1;
            Mail::to($user->email)->send(new DepositRequest($user, $amount, $wallet, $cointype, $usercoin, $coin));
            return redirect()->route('dashboard')->with('message', 'Completed! Your deposit will be approved when confirmed!');
        }else{
            return redirect()->route('dashboard')->with('error', 'Something went wrong!');
        }
        
    }
}
