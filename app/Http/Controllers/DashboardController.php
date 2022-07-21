<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    // view dashboard
    public function index()
    {
        // array of wallet

        $wallets = json_decode('[
            {
                "coin": "BNB",
                "balance": '.auth()->user()->bnb.'
            },
            {
                "coin": "XRP",
                "balance": '.auth()->user()->xrp.'
            },
            {
                "coin": "Cardano ADA ",
                "balance": '.auth()->user()->ada.'
            },
            {
                "coin": "BRISE Bitgert",
                "balance": '.auth()->user()->brise.'
            },
            {
                "coin": "Move BEP20 movez",
                "balance": '.auth()->user()->move.'
            },
            {
                "coin": "TETHER USDT",
                "balance": '.auth()->user()->usdt.'
            },
            {
                "coin": "Qmall BEP20",
                "balance": '.auth()->user()->qmall_bep20.'
            },
            {
                "coin": "Qmall ERC20",
                "balance": '.auth()->user()->qmall_erc20.'
            },
            {
                "coin": "GMT BEP20",
                "balance": '.auth()->user()->gmt_bep20.'
            },
            {
                "coin": "GMT SPL",
                "balance": '.auth()->user()->gmt_spl.'
            },
            {
                "coin": "GLBD",
                "balance": '.auth()->user()->glbd.'
            },
            {
                "coin": "DREAMN",
                "balance": '.auth()->user()->dreamn.'
            },
            {
                "coin": "BTC",
                "balance": '.auth()->user()->btc.'
            },
            {
                "coin": "LSTAR",
                "balance": '.auth()->user()->lstar.'
            },
            {
                "coin": "OCEAN",
                "balance": '.auth()->user()->ocean.'
            },
            {
                "coin": "STMX",
                "balance": '.auth()->user()->stmx.'
            },
            {
                "coin": "RHT",
                "balance": '.auth()->user()->rht.'
            },
            {
                "coin": "R1",
                "balance": '.auth()->user()->r1.'
            },
            {
                "coin": "CVXCRV",
                "balance": '.auth()->user()->cvxcrv.'
            },
            {
                "coin": "MetaUFO",
                "balance": '.auth()->user()->metaufo.'
            },
            {
                "coin": "BID",
                "balance": '.auth()->user()->bid.'
            },
            {
                "coin": "FEX",
                "balance": '.auth()->user()->fex.'
            },
            {
                "coin": "SLC",
                "balance": '.auth()->user()->slc.'
            },
            {
                "coin": "RBX",
                "balance": '.auth()->user()->rbx_erc20.'
            },
            {
                "coin": "DKA",
                "balance": '.auth()->user()->dka_erc20.'
            },
            {
                "coin": "SOL NFT",
                "balance": '.auth()->user()->sol.'
            },
            {
                "coin": "VST",
                "balance": '.auth()->user()->vst_erc20.'
            },
            {
                "coin": "HZM",
                "balance": '.auth()->user()->hzm.'
            },
            {
                "coin": "LUNA",
                "balance": '.auth()->user()->luna.'
            },
            {
                "coin": "WAVES",
                "balance": '.auth()->user()->waves.'
            },
            {
                "coin": "PRCH",
                "balance": '.auth()->user()->prch_bsc.'
            },
            {
                "coin": "ARV ERC20",
                "balance": '.auth()->user()->arv_erc20.'
            },
            {
                "coin": "SHIB BEP20",
                "balance": '.auth()->user()->shib_bep20.'
            },
            {
                "coin": "USDC ERC20",
                "balance": '.auth()->user()->usdc_erc20.'
            },
            {
                "coin": "HUH ERC20",
                "balance": '.auth()->user()->huh_erc20.'
            },
            {
                "coin": "HUH BEP20",
                "balance": '.auth()->user()->huh_bep20.'
            }
            
        ]');

        return view('pages.dashboard')->with('wallets', $wallets);
    }
}
