<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwapRoomController extends Controller
{
    // view swap room page
    function index()
    {
        // array of wallet

        $wallets = json_decode('[
            {
                "coin": "BNB",
                "balance": '.auth()->user()->bnb.',
                "name": "bnb"
            },
            {
                "coin": "XRP",
                "balance": '.auth()->user()->xrp.',
                "name": "xrp"
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.auth()->user()->ada.',
                "name": "ada"
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.auth()->user()->brise.',
                "name": "brise"
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.auth()->user()->move.',
                "name": "move"
            },
            {
                "coin": "TETHER USDT",
                "balance": '.auth()->user()->usdt.',
                "name": "usdt"
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.auth()->user()->qmall_bep20.',
                "name": "qmall_bep20"
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.auth()->user()->qmall_erc20.',
                "name": "qmall_erc20"
            },
            {
                "coin": "GMT BEP20",
                "balance": '.auth()->user()->gmt_bep20.',
                "name": "gmt_bep20"
            },
            {
                "coin": "GMT SPL",
                "balance": '.auth()->user()->gmt_spl.',
                "name": "gmt_spl"
            },
            {
                "coin": "GLBD",
                "balance": '.auth()->user()->glbd.',
                "name": "glbd"
            },
            {
                "coin": "DREAMN",
                "balance": '.auth()->user()->dreamn.',
                "name": "dreamn"
            },
            {
                "coin": "BTC",
                "balance": '.auth()->user()->btc.',
                "name": "btc"
            },
            {
                "coin": "LSTAR",
                "balance": '.auth()->user()->lstar.',
                "name": "lstar"
            },
            {
                "coin": "OCEAN",
                "balance": '.auth()->user()->ocean.',
                "name": "ocean"
            },
            {
                "coin": "STMX",
                "balance": '.auth()->user()->stmx.',
                "name": "stmx"
            },
            {
                "coin": "RHT",
                "balance": '.auth()->user()->rht.',
                "name": "rht"
            },
            {
                "coin": "R1",
                "balance": '.auth()->user()->r1.',
                "name": "r1"
            },
            {
                "coin": "CVXCRV",
                "balance": '.auth()->user()->cvxcrv.',
                "name": "cvxcrv"
            },
            {
                "coin": "MetaUFO",
                "balance": '.auth()->user()->metaufo.',
                "name": "metaufo"
            },
            {
                "coin": "BID",
                "balance": '.auth()->user()->bid.',
                "name": "bid"
            },
            {
                "coin": "FEX",
                "balance": '.auth()->user()->fex.',
                "name": "fex"
            },
            {
                "coin": "SLC",
                "balance": '.auth()->user()->slc.',
                "name": "slc"
            },
            {
                "coin": "RBX",
                "balance": '.auth()->user()->rbx_erc20.',
                "name": "rbx_erc20"
            },
            {
                "coin": "DKA",
                "balance": '.auth()->user()->dka_erc20.',
                "name": "dka_erc20"
            },
            {
                "coin": "SOL",
                "balance": '.auth()->user()->solana.',
                "name": "solana"
            },
            {
                "coin": "SOL NFT",
                "balance": '.auth()->user()->sol.',
                "name": "sol"
            },
            {
                "coin": "VST",
                "balance": '.auth()->user()->vst_erc20.',
                "name": "vst_erc20"
            },
            {
                "coin": "HZM",
                "balance": '.auth()->user()->hzm.',
                "name": "hzm"
            },
            {
                "coin": "LUNA",
                "balance": '.auth()->user()->luna.',
                "name": "luna"
            },
            {
                "coin": "WAVES",
                "balance": '.auth()->user()->waves.',
                "name": "waves"
            },
            {
                "coin": "PRCH",
                "balance": '.auth()->user()->prch_bsc.',
                "name": "prch_bsc"
            },
            {
                "coin": "ARV ERC20",
                "balance": '.auth()->user()->arv_erc20.',
                "name": "arv_erc20"
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.auth()->user()->shib_bep20.',
                "name": "shib_bep20"
            },
            {
                "coin": "USDC ERC20",
                "balance": '.auth()->user()->usdc_erc20.',
                "name": "usdc_erc20"
            },
            {
                "coin": "HUH ERC20",
                "balance": '.auth()->user()->huh_erc20.',
                "name": "huh_erc20"
            },
            {
                "coin": "HUH BEP20",
                "balance": '.auth()->user()->huh_bep20.',
                "name": "huh_bep20"
            },
            {
                "coin": "Avalanche AVAX",
                "balance": '.auth()->user()->avax.',
                "name": "avax"
            },
            {
                "coin": "Algorand ALGO",
                "balance": '.auth()->user()->algo.',
                "name": "algo"
            },
            {
                "coin": "Lcx (LCX)",
                "balance": '.auth()->user()->lcx.',
                "name": "lcx"
            },
            {
                "coin": "Cronos (CRO)",
                "balance": '.auth()->user()->cro.',
                "name": "cro"
            },
            {
                "coin": "Quant (QNT)",
                "balance": '.auth()->user()->qnt.',
                "name": "qnt"
            }
            
            
        ]');

        return view('pages.swap-room')->with('wallets', $wallets);
    }

    // join room page
    function joinRoom(Request $request)
    {
        // array of wallet

        $wallets = json_decode('[
            {
                "coin": "BNB",
                "balance": '.auth()->user()->bnb.',
                "name": "bnb"
            },
            {
                "coin": "XRP",
                "balance": '.auth()->user()->xrp.',
                "name": "xrp"
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.auth()->user()->ada.',
                "name": "ada"
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.auth()->user()->brise.',
                "name": "brise"
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.auth()->user()->move.',
                "name": "move"
            },
            {
                "coin": "TETHER USDT",
                "balance": '.auth()->user()->usdt.',
                "name": "usdt"
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.auth()->user()->qmall_bep20.',
                "name": "qmall_bep20"
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.auth()->user()->qmall_erc20.',
                "name": "qmall_erc20"
            },
            {
                "coin": "GMT BEP20",
                "balance": '.auth()->user()->gmt_bep20.',
                "name": "gmt_bep20"
            },
            {
                "coin": "GMT SPL",
                "balance": '.auth()->user()->gmt_spl.',
                "name": "gmt_spl"
            },
            {
                "coin": "GLBD",
                "balance": '.auth()->user()->glbd.',
                "name": "glbd"
            },
            {
                "coin": "DREAMN",
                "balance": '.auth()->user()->dreamn.',
                "name": "dreamn"
            },
            {
                "coin": "BTC",
                "balance": '.auth()->user()->btc.',
                "name": "btc"
            },
            {
                "coin": "LSTAR",
                "balance": '.auth()->user()->lstar.',
                "name": "lstar"
            },
            {
                "coin": "OCEAN",
                "balance": '.auth()->user()->ocean.',
                "name": "ocean"
            },
            {
                "coin": "STMX",
                "balance": '.auth()->user()->stmx.',
                "name": "stmx"
            },
            {
                "coin": "RHT",
                "balance": '.auth()->user()->rht.',
                "name": "rht"
            },
            {
                "coin": "R1",
                "balance": '.auth()->user()->r1.',
                "name": "r1"
            },
            {
                "coin": "CVXCRV",
                "balance": '.auth()->user()->cvxcrv.',
                "name": "cvxcrv"
            },
            {
                "coin": "MetaUFO",
                "balance": '.auth()->user()->metaufo.',
                "name": "metaufo"
            },
            {
                "coin": "BID",
                "balance": '.auth()->user()->bid.',
                "name": "bid"
            },
            {
                "coin": "FEX",
                "balance": '.auth()->user()->fex.',
                "name": "fex"
            },
            {
                "coin": "SLC",
                "balance": '.auth()->user()->slc.',
                "name": "slc"
            },
            {
                "coin": "RBX",
                "balance": '.auth()->user()->rbx_erc20.',
                "name": "rbx_erc20"
            },
            {
                "coin": "DKA",
                "balance": '.auth()->user()->dka_erc20.',
                "name": "dka_erc20"
            },
            {
                "coin": "SOL NFT",
                "balance": '.auth()->user()->sol.',
                "name": "sol"
            },
            {
                "coin": "VST",
                "balance": '.auth()->user()->vst_erc20.',
                "name": "vst_erc20"
            },
            {
                "coin": "HZM",
                "balance": '.auth()->user()->hzm.',
                "name": "hzm"
            },
            {
                "coin": "LUNA",
                "balance": '.auth()->user()->luna.',
                "name": "luna"
            },
            {
                "coin": "WAVES",
                "balance": '.auth()->user()->waves.',
                "name": "waves"
            },
            {
                "coin": "PRCH",
                "balance": '.auth()->user()->prch_bsc.',
                "name": "prch_bsc"
            },
            {
                "coin": "ARV ERC20",
                "balance": '.auth()->user()->arv_erc20.',
                "name": "arv_erc20"
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.auth()->user()->shib_bep20.',
                "name": "shib_bep20"
            },
            {
                "coin": "USDC ERC20",
                "balance": '.auth()->user()->usdc_erc20.',
                "name": "usdc_erc20"
            },
            {
                "coin": "HUH ERC20",
                "balance": '.auth()->user()->huh_erc20.',
                "name": "huh_erc20"
            },
            {
                "coin": "HUH BEP20",
                "balance": '.auth()->user()->huh_bep20.',
                "name": "huh_bep20"
            },
            {
                "coin": "Avalanche AVAX",
                "balance": '.auth()->user()->avax.',
                "name": "avax"
            },
            {
                "coin": "Algorand ALGO",
                "balance": '.auth()->user()->algo.',
                "name": "algo"
            },
            {
                "coin": "Lcx (LCX)",
                "balance": '.auth()->user()->lcx.',
                "name": "lcx"
            },
            {
                "coin": "Cronos (CRO)",
                "balance": '.auth()->user()->cro.',
                "name": "cro"
            },
            {
                "coin": "Quant (QNT)",
                "balance": '.auth()->user()->qnt.',
                "name": "qnt"
            }
            
        ]');

        return view('pages.join-room')->with('wallets', $wallets);
    }

    public function startSwap(Request $Request){
        // array of wallet

        $wallets = json_decode('[
            {
                "coin": "BNB",
                "balance": '.auth()->user()->bnb.',
                "name": "bnb"
            },
            {
                "coin": "XRP",
                "balance": '.auth()->user()->xrp.',
                "name": "xrp"
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.auth()->user()->ada.',
                "name": "ada"
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.auth()->user()->brise.',
                "name": "brise"
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.auth()->user()->move.',
                "name": "move"
            },
            {
                "coin": "TETHER USDT",
                "balance": '.auth()->user()->usdt.',
                "name": "usdt"
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.auth()->user()->qmall_bep20.',
                "name": "qmall_bep20"
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.auth()->user()->qmall_erc20.',
                "name": "qmall_erc20"
            },
            {
                "coin": "GMT BEP20",
                "balance": '.auth()->user()->gmt_bep20.',
                "name": "gmt_bep20"
            },
            {
                "coin": "GMT SPL",
                "balance": '.auth()->user()->gmt_spl.',
                "name": "gmt_spl"
            },
            {
                "coin": "GLBD",
                "balance": '.auth()->user()->glbd.',
                "name": "glbd"
            },
            {
                "coin": "DREAMN",
                "balance": '.auth()->user()->dreamn.',
                "name": "dreamn"
            },
            {
                "coin": "BTC",
                "balance": '.auth()->user()->btc.',
                "name": "btc"
            },
            {
                "coin": "LSTAR",
                "balance": '.auth()->user()->lstar.',
                "name": "lstar"
            },
            {
                "coin": "OCEAN",
                "balance": '.auth()->user()->ocean.',
                "name": "ocean"
            },
            {
                "coin": "STMX",
                "balance": '.auth()->user()->stmx.',
                "name": "stmx"
            },
            {
                "coin": "RHT",
                "balance": '.auth()->user()->rht.',
                "name": "rht"
            },
            {
                "coin": "R1",
                "balance": '.auth()->user()->r1.',
                "name": "r1"
            },
            {
                "coin": "CVXCRV",
                "balance": '.auth()->user()->cvxcrv.',
                "name": "cvxcrv"
            },
            {
                "coin": "MetaUFO",
                "balance": '.auth()->user()->metaufo.',
                "name": "metaufo"
            },
            {
                "coin": "BID",
                "balance": '.auth()->user()->bid.',
                "name": "bid"
            },
            {
                "coin": "FEX",
                "balance": '.auth()->user()->fex.',
                "name": "fex"
            },
            {
                "coin": "SLC",
                "balance": '.auth()->user()->slc.',
                "name": "slc"
            },
            {
                "coin": "RBX",
                "balance": '.auth()->user()->rbx_erc20.',
                "name": "rbx_erc20"
            },
            {
                "coin": "DKA",
                "balance": '.auth()->user()->dka_erc20.',
                "name": "dka_erc20"
            },
            {
                "coin": "SOL NFT",
                "balance": '.auth()->user()->sol.',
                "name": "sol"
            },
            {
                "coin": "VST",
                "balance": '.auth()->user()->vst_erc20.',
                "name": "vst_erc20"
            },
            {
                "coin": "HZM",
                "balance": '.auth()->user()->hzm.',
                "name": "hzm"
            },
            {
                "coin": "LUNA",
                "balance": '.auth()->user()->luna.',
                "name": "luna"
            },
            {
                "coin": "WAVES",
                "balance": '.auth()->user()->waves.',
                "name": "waves"
            },
            {
                "coin": "PRCH",
                "balance": '.auth()->user()->prch_bsc.',
                "name": "prch_bsc"
            },
            {
                "coin": "ARV ERC20",
                "balance": '.auth()->user()->arv_erc20.',
                "name": "arv_erc20"
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.auth()->user()->shib_bep20.',
                "name": "shib_bep20"
            },
            {
                "coin": "USDC ERC20",
                "balance": '.auth()->user()->usdc_erc20.',
                "name": "usdc_erc20"
            },
            {
                "coin": "HUH ERC20",
                "balance": '.auth()->user()->huh_erc20.',
                "name": "huh_erc20"
            },
            {
                "coin": "HUH BEP20",
                "balance": '.auth()->user()->huh_bep20.',
                "name": "huh_bep20"
            },
            {
                "coin": "Avalanche AVAX",
                "balance": '.auth()->user()->avax.',
                "name": "avax"
            },
            {
                "coin": "Algorand ALGO",
                "balance": '.auth()->user()->algo.',
                "name": "algo"
            },
            {
                "coin": "Lcx (LCX)",
                "balance": '.auth()->user()->lcx.',
                "name": "lcx"
            },
            {
                "coin": "Cronos (CRO)",
                "balance": '.auth()->user()->cro.',
                "name": "cro"
            },
            {
                "coin": "Quant (QNT)",
                "balance": '.auth()->user()->qnt.',
                "name": "qnt"
            }
            
        ]');

        return view('pages.start-swap')->with('wallets', $wallets);
    }

    public function swap(Request $request){
        $user = auth()->user();

        $oldwallet = $request->oldwallet;
        $newwallet = $request->new;
        $amount = $request->amount;
        $balance = DB::table('users')->where('id', auth()->user()->id)
        ->value($oldwallet); // get balance of old wallet

        $newwalletbalance = DB::table('users')->where('id', auth()->user()->id)
        ->value($newwallet); // get balance of new wallet

        if($amount == 0){
            return redirect()->back()->with('error', 'You must enter a valid amount');
        }
        else if($balance < $amount){
            return redirect()->back()->with('error', 'You do not have enough balance');
        }else{
            DB::table('users')->where('id', auth()->user()->id)
            ->update([$oldwallet => $balance - $amount]);

            DB::table('users')->where('id', auth()->user()->id)
            ->update([$newwallet => $newwalletbalance + $amount]);

            // update active swap number in the database
            auth()->user()->active_swap++; 
            auth()->user()->save();
            
            return redirect()->back()->with('success', 'Your Swap was successful');
        }
    }

}
