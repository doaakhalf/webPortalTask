@extends('layouts.appBootstrap')
@section('customStyle')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


<link href="{{ asset('assets/css/styleTable.css') }}" rel="stylesheet">


@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a class="btn btn-primary" href="{{route('customerUserCreate')}}" >Create User</a>

        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                       
                    </tr>
                    @endforeach
                   
                   
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@section('customScript')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="  https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> --}}
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    @endsection
@endsection
