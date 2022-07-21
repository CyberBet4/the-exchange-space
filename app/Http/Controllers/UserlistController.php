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

    public function get_singleuser(Request $request)
    {
        $user = User::find($request->id);
        $wallets = json_decode('[
            {
                "coin": "BNB",
                "balance": '.$user->bnb.'
            },
            {
                "coin": "XRP",
                "balance": '.$user->xrp.'
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.$user->ada.'
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.$user->brise.'
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.$user->move.'
            },
            {
                "coin": "TETHER USDT",
                "balance": '.$user->usdt.'
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.$user->qmall_bep20.'
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.$user->qmall_erc20.'
            },
            {
                "coin": "GMT BEP20",
                "balance": '.$user->gmt_bep20.'
            },
            {
                "coin": "GMT SPL",
                "balance": '.$user->gmt_spl.'
            },
            {
                "coin": "GLBD",
                "balance": '.$user->glbd.'
            },
            {
                "coin": "DREAMN",
                "balance": '.$user->dreamn.'
            },
            {
                "coin": "BTC",
                "balance": '.$user->btc.'
            },
            {
                "coin": "LSTAR",
                "balance": '.$user->lstar.'
            },
            {
                "coin": "OCEAN",
                "balance": '.$user->ocean.'
            },
            {
                "coin": "STMX",
                "balance": '.$user->stmx.'
            },
            {
                "coin": "RHT",
                "balance": '.$user->rht.'
            },
            {
                "coin": "R1",
                "balance": '.$user->r1.'
            },
            {
                "coin": "CVXCRV",
                "balance": '.$user->cvxcrv.'
            },
            {
                "coin": "MetaUFO",
                "balance": '.$user->metaufo.'
            },
            {
                "coin": "BID",
                "balance": '.$user->bid.'
            },
            {
                "coin": "FEX",
                "balance": '.$user->fex.'
            },
            {
                "coin": "SLC",
                "balance": '.$user->slc.'
            },
            {
                "coin": "RBX",
                "balance": '.$user->rbx_erc20.'
            },
            {
                "coin": "DKA",
                "balance": '.$user->dka_erc20.'
            },
            {
                "coin": "SOL NFT",
                "balance": '.$user->sol.'
            },
            {
                "coin": "VST",
                "balance": '.$user->vst_erc20.'
            },
            {
                "coin": "HZM",
                "balance": '.$user->hzm.'
            },
            {
                "coin": "LUNA",
                "balance": '.$user->luna.'
            },
            {
                "coin": "WAVES",
                "balance": '.$user->waves.'
            },
            {
                "coin": "PRCH",
                "balance": '.$user->prch_bsc.'
            },
            {
                "coin": "ARV ERC20",
                "balance": '.$user->arv_erc20.'
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.$user->shib_bep20.'
            },
            {
                "coin": "USDC ERC20",
                "balance": '.$user->usdc_erc20.'
            },
            {
                "coin": "HUH ERC20",
                "balance": '.$user->huh_erc20.'
            },
            {
                "coin": "HUH BEP20",
                "balance": '.$user->huh_bep20.'
            }
            
        ]');
        return view('pages.admin.single-user-list', compact('user', 'wallets'));
    }
}
