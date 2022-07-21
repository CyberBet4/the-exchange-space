@extends('layouts.app')
@include('layouts.components.withdrawmodal')
@include('layouts.components.fundmodal')

@section('content')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

          {{-- {{$wallets['ETH']}} --}}
          {{-- @foreach ($wallets as $wallet)
              {{$wallet->coin}} = {{$wallet->balance}}
          @endforeach --}}
          {{-- {{ dd($wallets) }} --}}
          {{-- {{ die($wallets) }} --}}
          
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
           
            <h3 class="page-title">
              
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>


          {{-- CRYPTO BALANCES --}}

          <div class="row">
            <div class="d-none">
              {{$count = 0 }}
            </div>
            
            @foreach($wallets as $value => $wallet)
              @if($wallet->balance > 0)
              <div class="col-md-4 stretch-card grid-margin">
                @if(2 >= $value/2 && $value % 2 == 0)
                <div class="card bg-gradient-success card-img-holder text-white">
                @elseif($value % 2 == 0)
                  <div class="card bg-gradient-danger card-img-holder text-white">
                @else
                <div class="card bg-gradient-info card-img-holder text-white">
                  @endif 
                  <div class="card-body">
                    <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">{{$wallet->coin}} <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">${{ $wallet->balance }}</h2>
                    {{-- <h6 class="card-text">Increased by 60%</h6> --}}
                    {{-- <h6 class="card-text">{{$value}}</h6> --}}
                   </div>
                </div>
              </div>
              <div class="d-none">
                {{$count++}}
              </div>
              @endif
            @endforeach
          </div>

          {{-- No wallets present --}}
          <div class="row">
            @if($count == 0)
            <div class="col-12">
                <div class="bg-gradient-info jumbotron pt-3 pb-3 text-white d-flex align-items-center justify-space-between" style="justify-content: space-between">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="mr-3">
                      <i class="mdi mdi-information" style="font-size: 44px;"></i>
                    </div>
                    
                    <div>
                      <h4 class="">No wallet present</h4>
                      <p class="text-white-50 mb-0">
                        Fund your swappable wallet to start trading
                      </p>
                    </div>
                    
                  </div>

                  {{-- <div>
                    <i class="mdi mdi-information" style="font-size: 24px;"></i>
                    <h4 class="">No wallets present</h4>
                    <p class="text-white-50">
                      Fund your swappable wallet to start trading
                    </p>
                  </div> --}}
                  
                  <img src="{{asset('/images/dashboard/girl-using-mobile-net-banking.svg')}}" style="max-width: 250px;" class="img-fluid" alt="">
                </div>
            </div>
            @endif
          </div>

          

          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card card-img-holder">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Active Swaps
                  </h4>
                  <h2 class="mb-5">{{auth()->user()->active_swap}}</h2>
                  {{-- <h6 class="card-text">Increased by 60%</h6> --}}
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card card-img-holder">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Completed Swaps 
                  </h4>
                  <h2 class="mb-5">{{ auth()->user()->completed_swap }}</h2>
                  {{-- <h6 class="card-text">Decreased by 10%</h6> --}}
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card card-img-holder">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Total Swaps
                  </h4>
                  <h2 class="mb-5">{{ auth()->user()->active_swap + auth()->user()->completed_swap }} </h2>
                  {{-- <h6 class="card-text">Increased by 5%</h6> --}}
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Exchangespace 2022</span>
            {{-- <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span> --}}
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection