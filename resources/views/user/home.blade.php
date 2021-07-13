@extends('layouts.appUser')
@section('customStyle')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


<link href="{{ asset('assets/css/styleTable.css') }}" rel="stylesheet">


@endsection

@section('content')
<div class="container">
   
       

        
        
   
</div>
@section('customScript')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="  https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> --}}

    @endsection
@endsection
