@extends('layouts.app')
@include('layouts.components.withdrawmodal')
@include('layouts.components.fundmodal')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> View Room </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="text-center">
                            <img src={{ asset("/images/dashboard/online-money-donation.svg")}} alt="" class="img-fluid mb-4">
                            <h3>No Rooms</h3>
                            <h5 class="text-gray">
                                You have not joined any room yet
                            </h5>
                            <a href="{{ route('join-room') }}" class="btn btn-info mt-2">Join a Room</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
