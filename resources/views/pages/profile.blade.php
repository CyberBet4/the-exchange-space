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
        <h3 class="page-title"> Account Settings </h3>
      </div>
      <div class="row">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">My Profile Settings</h4>
        {{-- <p class="card-description"> Basic form elements </p> --}}
        <form class="forms-sample" method="post" action={{ route("profile")}}>
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" disabled value={{ auth()->user()->name}} placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail3" disabled value={{auth()->user()->email}} placeholder="Email">
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Address</label>
            <textarea name="address" id="" cols="30" class="form-control" rows="4">{{ auth()->user()->address }}</textarea>
            <div class="validate">
                @error('address')
                    <span class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="New Password">
            <div class="validate">
                @error('password')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword4">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword5" placeholder="Confirm Password">
            <div class="validate">
                @error('password')
                    <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
          </div>

          
          <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Exchangespace 2022</span>
      {{-- <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span> --}}
    </div>
  </footer>
</div>
@endsection