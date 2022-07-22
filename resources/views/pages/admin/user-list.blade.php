@extends('layouts.app')

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


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Users</h4>
                    <p class="card-description"> All registered users are listed below. </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Full name </th>
                          <th> Email </th>
                          <th> Address </th>
                          <th> Actions </th>
                        </tr>
                      </thead>
                      
                      <tbody> 
                        @foreach ($users as $user)
                            {{-- <form action={{ route("user-list")}} method="post">
                                @csrf --}}
                                <tr>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td class="address"> {{$user->address}} </td> 
                                    <td class="d-flex"> 
                                        <a href={{ url("/user-list", $user)}} class="btn btn-inverse-dark btn-sm mr-3">
                                         <i class="mdi mdi-eye mr-2"></i> View</a> 
                                    {{-- </form> --}}
                                    @if ($user->id != auth()->user()->id)
                                        <form action={{ url("/user-delete", $user)}} method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value={{ $user->id }}>
                                            <button type="submit" onclick="deleteUser()" class="btn btn-danger btn-sm">
                                              <i class="mdi mdi-cancel mr-2"></i> Delete</button>
                                            <script>
                                                function deleteUser() {
                                                    return confirm("Are you sure you want to delete this user?");
                                                }
                                            </script>
                                        {{-- </form> --}}
                                        @endif
                                    </td>
                                </tr>
                            
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection