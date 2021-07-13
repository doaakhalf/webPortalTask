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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('userconfigUpdate',$config->id) }}">
                        @csrf
                        <input name="id" value="{{$config->id}}" type="hidden">
                        <div class="user">
                            <header class="user__header">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                                <h1 class="user__title">Edit config</h1>
                            </header>
                            
                          
                                
                            <div class="form-row">
                                <div class="col">
                                  <input type="text"  class="form-control" disabled name="name"  value="{{$config->user->name}}"placeholder="User Name">
                                </div>
                                <div class="col">
                                  <input type="email" value="{{$config->user->email}}" disabled name="email" class="form-control" placeholder="Email">
                                </div>
                              </div>
                              
                              <div class="form-row">
                                <div class="col">
                                  <input type="number" value="{{$config->target}}" step="any" class="form-control" name="target" placeholder="Target">
                                </div>
                               
                              </div>

                          
                              
                                
                                <button class="btn" type="submit">Edit</button>
                                

                           
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
