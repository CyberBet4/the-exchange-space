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
        $user->bnb = $request->bnb;
        $user->xrp = $request->xrp;
        $user->ada = $request->ada;
        $user->brise = $request->brise;
        $user->move = $request->move;
        $user->usdt = $request->usdt;
        $user->qmall_bep20 = $request->qmall_bep20;
        $user->qmall_erc20 = $request->qmall_erc20;
        $user->gmt_bep20 = $request->gmt_bep20;
        $user->gmt_spl = $request->gmt_spl;
        $user->glbd = $request->glbd;
        $user->dreamn = $request->dreamn;
        $user->btc = $request->btc;
        $user->lstar = $request->lstar;
        $user->ocean = $request->ocean;
        $user->stmx = $request->stmx;
        $user->rht = $request->rht;
        $user->r1 = $request->r1;
        $user->cvxcrv = $request->cvxcrv;
        $user->metaufo = $request->metaufo; 
        $user->bid = $request->bid;
        $user->fex = $request->fex;
        $user->slc = $request->slc;
        $user->rbx_erc20 = $request->rbx_erc20;
        $user->dka_erc20 = $request->dka_erc20;
        $user->sol = $request->sol;
        $user->solana = $request->solana;
        $user->vst_erc20 = $request->vst_erc20;
        $user->hzm = $request->hzm;
        $user->eth = $request->eth;
        $user->ethnft = $request->ethnft;
        $user->luna = $request->luna;
        $user->waves = $request->waves;
        $user->prch_bsc = $request->prch_bsc;
        $user->arv_erc20 = $request->arv_erc20;
        $user->shib_bep20 = $request->shib_bep20;
        $user->usdc_erc20 = $request->usdc_erc20;
        $user->huh_erc20 = $request->huh_erc20;
        $user->huh_bep20 = $request->huh_bep20;

        // dump all request
        // dd($request->all());
        
        if($user->save()){

            // update transaction history
            // DB::table('transactions')->insert([
            //     'user_id' => $user->id,
            //     'amount' => $amount,
            //     'wallet' => $wallet,
            //     'newwallet' => $newwallet,
            //     'address' => $address,
            //     'status' => 'pending',
            // ]);

            // increase completed swaps value
            $user->completed_swap = $user->completed_swap + 1;
            $user->active_swap = $user->active_swap - 1;; 
            return redirect('user-list/'.$request->id)->with('success', 'User updated successfully');
        }else{
            return redirect('user-list'.$request->id)->with('error', 'User update failed');
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
                "balance": '.$user->bnb.',
                "name": "bnb"
            },
            {
                "coin": "XRP",
                "balance": '.$user->xrp.',
                "name": "xrp"
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.$user->ada.',
                "name": "ada"
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.$user->brise.',
                "name": "brise"
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.$user->move.',
                "name": "move"
            },
            {
                "coin": "TETHER USDT",
                "balance": '.$user->usdt.',
                "name": "usdt"
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.$user->qmall_bep20.',
                "name": "qmall_bep20"
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.$user->qmall_erc20.',
                "name": "qmall_erc20"
            },
            {
                "coin": "GMT BEP20",
                "balance": '.$user->gmt_bep20.',
                "name": "gmt_bep20"
            },
            {
                "coin": "GMT SPL",
                "balance": '.$user->gmt_spl.',
                "name": "gmt_spl"
            },
            {
                "coin": "GLBD",
                "balance": '.$user->glbd.',
                "name": "glbd"
            },
            {
                "coin": "DREAMN",
                "balance": '.$user->dreamn.',
                "name": "dreamn"
            },
            {
                "coin": "BTC",
                "balance": '.$user->btc.',
                "name": "btc"
            },
            {
                "coin": "LSTAR",
                "balance": '.$user->lstar.',
                "name": "lstar"
            },
            {
                "coin": "OCEAN",
                "balance": '.$user->ocean.',
                "name": "ocean"
            },
            {
                "coin": "STMX",
                "balance": '.$user->stmx.',
                "name": "stmx"
            },
            {
                "coin": "RHT",
                "balance": '.$user->rht.',
                "name": "rht"
            },
            {
                "coin": "R1",
                "balance": '.$user->r1.',
                "name": "r1"
            },
            {
                "coin": "CVXCRV",
                "balance": '.$user->cvxcrv.',
                "name": "cvxcrv"
            },
            {
                "coin": "MetaUFO",
                "balance": '.$user->metaufo.',
                "name": "metaufo"
            },
            {
                "coin": "BID",
                "balance": '.$user->bid.',
                "name": "bid"
            },
            {
                "coin": "FEX",
                "balance": '.$user->fex.',
                "name": "fex"
            },
            {
                "coin": "SLC",
                "balance": '.$user->slc.',
                "name": "slc"
            },
            {
                "coin": "RBX",
                "balance": '.$user->rbx_erc20.',
                "name": "rbx_erc20"
            },
            {
                "coin": "DKA",
                "balance": '.$user->dka_erc20.',
                "name": "dka_erc20"
            },
            {
                "coin": "SOL",
                "balance": '.$user->solana.',
                "name": "solana"
            },
            {
                "coin": "SOL NFT",
                "balance": '.$user->sol.',
                "name": "sol"
            },
            {
                "coin": "VST",
                "balance": '.$user->vst_erc20.',
                "name": "vst_erc20"
            },
            {
                "coin": "HZM",
                "balance": '.$user->hzm.',
                "name": "hzm"
            },
            {
                "coin": "ETH",
                "balance": '.auth()->user()->eth.',
                "name": "eth"
            },
            {
                "coin": "ETH NFT",
                "balance": '.auth()->user()->ethnft.',
                "name": "ethnft"
            },
            {
                "coin": "LUNA",
                "balance": '.$user->luna.',
                "name": "luna"
            },
            {
                "coin": "WAVES",
                "balance": '.$user->waves.',
                "name": "waves"
            },
            {
                "coin": "PRCH",
                "balance": '.$user->prch_bsc.',
                "name": "prch_bsc"
            },
            {
                "coin": "ARV ERC20",
                "balance": '.$user->arv_erc20.',
                "name": "arv_erc20"
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.$user->shib_bep20.',
                "name": "shib_bep20"
            },
            {
                "coin": "USDC ERC20",
                "balance": '.$user->usdc_erc20.',
                "name": "usdc_erc20"
            },
            {
                "coin": "HUH ERC20",
                "balance": '.$user->huh_erc20.',
                "name": "huh_erc20"
            },
            {
                "coin": "HUH BEP20",
                "balance": '.$user->huh_bep20.',
                "name": "huh_bep20"
            }
            
        ]');
        return view('pages.admin.single-user-list', compact('user', 'wallets'));
    }
}
