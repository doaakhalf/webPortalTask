@extends('layouts.app2')
@section('customStyle')
<link href="{{ asset('assets/css/style.scss') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if($loginType=='customer')
                    <form method="POST" action="{{ route('customerClogin') }}">
                      @else
                    <form method="POST" action="{{ route('userUlogin') }}">

                        @endif
                        @csrf

                        <div class="user">
                            <header class="user__header">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                    @if($loginType=='customer')
                                
                                <h1 class="user__title">Customer Login Form</h1>
                         
                              
                          @else
                          <h1 class="user__title">User Login Form</h1>
                              
                          @endif
                            </header>
                            
                            @if(session()->has('message'))
                            <div style="color: red;font-weight:bold" class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                                
                                <div class="form__group">
                                    <input type="email" placeholder="Email" name="email" class="form__input" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <div class="form__group">
                                    <input type="password" placeholder="Password" name="password" class="form__input" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <button class="btn" type="submit">Login</button>
                    @if($loginType=='customer')
                               
                                <a class="btn" href="{{route('customerregister')}}" >Register</a>

                
                        
                    @endif
                           
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
