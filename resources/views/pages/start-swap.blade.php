@extends('layouts.app')
@include('layouts.components.withdrawmodal')
@include('layouts.components.fundmodal')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @elseif(session()->has('error'))
          <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @elseif(session()->has('message'))
          <div class="alert alert-info">
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="page-header">
            <h3 class="page-title"> Start Swap </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action={{ route("swap")}} method="post">
                            @csrf
                        <div class="d-flex justify-content-center mb-4" style="min-width: 500px">
                            <label for="" class="text-center"> <h3>Choose Wallet</h3>
                            <select id="available-wallet" name="available" style="color: #000000; min-width: 400px;" class="form-control mt-3 mb-3">
                                <option value="">Select wallet</option>
                                @foreach($wallets as $wallet)
                                {{-- check that wallet is greater than zero --}}
                                @if($wallet->balance > 0)
                                    <option id="{{$wallet->name}}" value="{{ $wallet->balance }}">{{ $wallet->coin }}</option>
                                @endif
                                @endforeach
                            </select>
                            <input type="hidden" name="oldwallet" id="oldwallet" value="">
                            <label for="">Balance
                                <input style="width: 500px;" type="text" id="coin-value" class="form-control" placeholder="wallet balance" readonly value="">
                            </label>
                        </label>
                        </div>

                        <div class="d-flex justify-content-center" style="min-width: 500px">
                            <label for="">
                                <h3 class="text-center mt-4">New Wallet</h3>
                                <select id="new-wallet" name="new" style="color: #000000; min-width: 500px;" class="form-control mt-3 mb-3">
                                    <option value="">Select wallet</option>
                                    @foreach($wallets as $wallet)
                                    {{-- check that wallet is equal than zero --}}
                                    @if($wallet->balance == 0)
                                        <option id="{{$wallet->name}}" name="newwallet" value="{{ $wallet->name }}">{{ $wallet->coin }}</option>
                                    @endif
                                    @endforeach
                                </select>

                                <label for="" class="text-center"> Amount
                                    <input style="width: 500px;" type="number" name="amount" id="amount" disabled class="form-control" placeholder="wallet balance" value="0">
                                    {{-- <input type="hidden" name="newwallet" id="newwallet"> --}}
                                </label>
                            </label>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <button type="submit" id="submitbtn" disabled class="btn btn-info mt-2">Swap</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('available-wallet').onchange = function() {
            var available = document.getElementById('available-wallet');
            document.getElementById('coin-value').value = available.value;


            // get selected option id
            var selected = available.options[available.selectedIndex].id;
            document.getElementById('oldwallet').value = selected;
            
            if(available.value != ""){
                document.getElementById('submitbtn').disabled = false;
            }else{
                document.getElementById('submitbtn').disabled = true;
            }  
                        
        }

        document.getElementById('new-wallet').onchange = function() {
            // var newwallet = document.getElementById('new-wallet').value;
            // document.getElementById('newwallet').value = newwallet;
            // if(newwallet != ""){
                document.getElementById('amount').disabled = false;
            // }
        }

        
              
        
        
        
    </script>
</div>
@endsection
