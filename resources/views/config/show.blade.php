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
        
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Email</th>

                        <th>Target</th>
                        <th>Action</th>

                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($configs as $config)
                    <tr>
                        <td>{{$config->id}}</td>
                        <td>{{$config->user->name}}</td>
                        <td>{{$config->user->email}}</td>

                        <td>{{$config->target}}</td>
                        <td><a href="{{route('userconfigEdit',$config->id)}}" class=" btn btn-primary">Edit</a></td>

                       
                    </tr>
                    @endforeach
                   
                   
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Email</th>

                        <th>Payment</th>
                        <th>Action</th>

                     
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
