@extends('layouts.app')
@include('layouts.components.withdrawmodal')
@include('layouts.components.fundmodal')

@section('content')

    <!-- partial -->
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
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">TRX <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">${{ auth()->user()->trx }}</h2>
                  {{-- <h6 class="card-text">Increased by 60%</h6> --}}
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">FWT <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">${{ auth()->user()->fwt }}</h2>
                  {{-- <h6 class="card-text">Decreased by 10%</h6> --}}
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">TPC <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">${{ auth()->user()->tpc }}</h2>
                  {{-- <h6 class="card-text">Increased by 5%</h6> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card card-img-holder">
                <div class="card-body">
                  <img src={{ asset("/images/dashboard/circle.svg")}} class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Active Swaps
                  </h4>
                  <h2 class="mb-5">0</h2>
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
                  <h2 class="mb-5">0</h2>
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
                  <h2 class="mb-5">0</h2>
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
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection