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
                    {{-- back button --}}
                    <a href={{ url("/user-list")}} class="btn btn-inverse-info btn-sm mb-4">
                        <i class="mdi mdi-arrow-left mr-2"></i>
                        All Users</a>
                        <h4 class="mb-0 card-title"> View Profile</h4> 
                    <p class="card-description mb-4"> You are viewing {{$user->name}} profile. </p>
                    
                    <form class="forms-sample" method="post" action={{ route("user-list")}}>
                        @csrf
                        <input type="hidden" name="id" value={{ $user->id }}>
                        {{-- jumbotron --}}
                        <div class="jumbotron bg-inverse-dark text-white">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" disabled value={{ $user->name}} placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail3" disabled value={{$user->email}} placeholder="Email">
                      </div>
            
                      <div class="form-group">
                        <label for="exampleTextarea1">Address</label>
                        <textarea name="address" disabled id="" cols="30" class="form-control" rows="4">{{ $user->address }}</textarea>
                      </div>
                    </div>

                      <h5 class="card-title mt-5">Wallets</h5>
                      <div class="form-row mt-3">
                        {{-- heading saying available coins --}}
                        
                        @foreach($wallets as $wallet)
                        <div class="form-group col-md-3">
                          <label>{{$wallet->coin}}</label>
                          <input type="number" id="wallet" class="form-control" name={{$wallet->name}} value={{$wallet->balance}}>
                          
                        </div>
                        @endforeach
                      </div>

                      <input type="hidden" id="alteredwallet" name="alteredwallet" value="">
                        <input type="hidden" id="alteredamount" name="alteredamount" value="">
            
                      <div class="d-flex" style="justify-content: space-between;">
                        <button type="submit" class="btn btn-dark me-2 mr-4">
                           <i class="mdi mdi-check mr-2"></i> Update</button>
                    </form>
                        @if ($user->id != auth()->user()->id)
                        <form action={{ url("/user-delete", $user)}} method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value={{ $user->id }}>
                            <button type="submit" onclick="deleteUser()" class="btn btn-inverse-danger">
                                <i class="mdi mdi-cancel mr-2"></i>
                                Delete User</button>
                            <script>
                                function deleteUser() {
                                    return confirm("Are you sure you want to delete this user?");
                                }
                            </script>
                        {{-- </form> --}}
                        @endif
                      </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      const input = document.querySelector("input");
      input.addEventListener('change', getInfo());

      function getInfo(){
        document.getElementById("alteredamount").value = document.getElementById("wallet").value;
        // get name attribute of input field
        document.getElementById("alteredwallet").value  = document.getElementById("wallet").getAttribute("name");
      }
    </script>
@endsection
