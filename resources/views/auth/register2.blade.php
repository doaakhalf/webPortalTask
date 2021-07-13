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
                    <form method="POST" action="{{ route('customerCregister') }}">

                        @csrf

                        <div class="user">
                            <header class="user__header">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                                <h1 class="user__title">Login Form</h1>
                            </header>
                            
                            
                                <div class="form__group">
                                    <input type="text" placeholder="Name" name="name" class="form__input" />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form__group">
                                    <input type="email" placeholder="Email" name="email" class="form__input" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <div class="form__group">
                                    <input type="text" placeholder="Website" name="website" class="form__input" />
                                    @error('website')
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
                                <div class="form__group">
                                    <input type="password" placeholder="password Confirm" name="password_confirmation" required class="form__input" />
                                    @error('password Confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <button class="btn" type="submit">Register</button>
                                <a class="btn" href="{{route('customerlogin')}}" >Login</a>

                           
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
