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
                          <th> First name </th>
                          <th> Address </th>
                          <th> trx </th>
                          <th> fwt </th>
                          <th> tpc </th>
                          <th> Actions </th>
                        </tr>
                      </thead>
                      
                      <tbody> 
                        @foreach ($users as $user)
                            <form action={{ route("user-list")}} method="post">
                                @csrf
                                <input type="hidden" name="id" value={{ $user->id }}>
                                <tr>
                                    <td> {{$user->name}} </td>
                                    <td class="address"> {{$user->address}} </td> 
                                    <td> <input type="number" class="form-control" name="trx" value={{$user->trx}}> </td>
                                    <td> <input type="number" class="form-control" name="fwt" value={{$user->fwt}}> </td>
                                    <td> <input type="number" class="form-control" name="tpc" value={{$user->tpc}}> </td>
                                    <td> 
                                        <button type="submit" class="btn btn-inverse-dark btn-sm">Update</button> 
                                    </form>
                                    @if ($user->id != auth()->user()->id)
                                        <form action={{ url("/dashboard/user-delete", $user)}} method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value={{ $user->id }}>
                                            <button type="submit" onclick="deleteUser()" class="btn btn-danger btn-sm">Delete</button>
                                            <script>
                                                function deleteUser() {
                                                    return confirm("Are you sure you want to delete this user?");
                                                }
                                            </script>
                                        </form>
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