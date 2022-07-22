<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WithdrawRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    // controller for withdrawing funds from the user's account
    public function withdraw(Request $request){
        
        // get wallet to be deducted from and external wallet to be sent to

        $user = auth()->user();
        $amount = $request->amount; // amount to be withdrawn
        $wallet = $request->wallet; // wallet type
        $address = $request->address; // wallet address
        $newwallet = $request->newwallet; // new wallet to be sent to
        $db_wallet = DB::table('users')->where('id', auth()->user()->id)
        ->value($wallet); // get user's wallet balance

     
        if($db_wallet >= $amount && $amount > 0){
            // if the user has enough funds, deduct the amount from their balance
            $db_wallet -= $amount;

            // update the user's balance in the database
            DB::table('users')
            ->where('id', auth()->user()->id)
            ->update([$wallet => $db_wallet]);

            // update transaction table
            DB::table('transactions')->insert([
                'user_id' => auth()->user()->id,
                'amount' => $amount,
                'wallet' => $wallet,
                'newwallet' => $newwallet,
                'address' => $address,
                'status' => 'pending',
            ]);

            // update active swap number in the database
            auth()->user()->active_swap++; 
            auth()->user()->save();

            // notify admin of the withdrawal request
            Mail::to($user->email)->send(new WithdrawRequest($user, $amount, $wallet, $newwallet, $address));

            // send the amount to the user's address and return success message
            return redirect()->route('dashboard')->with('success', "Your request has been sent and is been processed, you'll receive your funds within 5 mins.");
        }

        return redirect()->route('dashboard')->with('error', 'You do not have enough funds to withdraw that amount');
    }
}
