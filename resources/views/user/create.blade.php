@extends('layouts.appBootstrap')
@section('customStyle')
{{-- <link href="{{ asset('assets/css/style.scss') }}" rel="stylesheet"> --}}


@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customerUserStore') }}">
                        @csrf

                        <div class="user">
                            <header class="user__header">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                                <h1 class="user__title">Create User</h1>
                            </header>
                            
                          
                                
                            <div class="form-row">
                                <div class="col">
                                  <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="col">
                                  <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-row">


                              <div class="col">
                                <input type="password" placeholder="Password" name="password" class="form-control" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="col">
                                <input type="password" placeholder="password Confirm" name="password_confirmation" required class="form-control" />
                                @error('password Confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                              <div class="form-row">
                                <div class="col">
                                 
                                    <select class="form-control form-control-md" name="roles[]" aria-label="Default select example" multiple>
                                        <option disabled value="" >select Roles</option>
                                      
                                        @foreach ($roles as $role)
                                        <option style="color: rgb(109, 34, 109)" value="{{$role->name}}" >{{$role->name}}</option>
                                           
                                       @endforeach
                                     
                                      </select>
                                </div>
                                
                              </div>
                                
                                <button class="btn" type="submit">Create</button>
                                

                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('customScript')

<script src="{{ asset('assets/js/script.js') }}" defer></script>



@endsection
@endsection
