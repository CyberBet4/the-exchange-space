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
        @endif
      <div class="page-header">
        <h3 class="page-title"> Swap Transactions </h3>
      </div>

      <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">History</h4>
                <p class="card-description mb-4"> List of all transactions that happened </p>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>S/n</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Wallet</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" name="" value={{$serial = 0}}>
                      
                        @if(count($transactions) > 0)
                        @foreach( $transactions as $transaction )
                        <tr>
                            <td>{{$serial = $serial + 1}}</td>
                            
                            @if($transaction->address != "")
                            <td class="text-gray"><i>({{ strtoupper($transaction->wallet) }}) withdraw to external wallet</i> </td>
                            @else
                            <td class="text-gray"><i>({{ strtoupper($transaction->wallet) }}) swap to internal wallet</i> </td>
                            @endif
                            <td class="text-gray">${{ $transaction->amount }} </td>
                            <td class="text-gray"> <b>{{ strtoupper($transaction->newwallet) }}  
                              {{ $transaction->address }}</b> </td>
                              <td>{{ $transaction->created_at }}</td>
                            
                            {{-- @if($transaction->status == 'pending')
                            <td><label class="badge badge-warning">
                                {{$transaction->status}}
                            </label></td>
                            @elseif($transaction->status == 'success')
                            <td><label class="badge badge-success">
                                {{$transaction->status}}
                            </label></td>
                            @endif --}}

                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center text-gray">
                                <strong>No transactions yet</strong>
                            </td>
                        </tr>
                        @endif
                        
                      {{-- <tr>
                        <td>Messsy</td>
                        <td class="text-gray"><i>(USDT) withdraw to external wallet</i> </td>
                        <td class="text-gray">$20 </td>
                        <td class="text-gray"> <b> (BTC) 98dfgd8fd98gdf9s98fsd9</b> </td>
                        <td><label class="badge badge-warning">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td class="text-gray"><i> (BTC) swap to internal wallet </i> </td>
                        <td class="text-gray">$20 </td>
                        <td class="text-gray"> <b>USDT</b> </td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr> --}}
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection