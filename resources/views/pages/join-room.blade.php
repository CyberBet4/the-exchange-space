@extends('layouts.app')
@include('layouts.components.withdrawmodal')
@include('layouts.components.fundmodal')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Join Room </h3>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="text-center">
                            <img src={{ asset("/images/dashboard/no-messages-diff.svg")}} alt="" class="img-fluid mb-4">
                            <h3>Send a Message</h3>
                            <h5 class="text-gray">
                                To join a room, send a message to the admin owner
                            </h5>
                            <a href="mailto:bradleykellogg5@gmail.com" class="btn btn-info mt-2">Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
