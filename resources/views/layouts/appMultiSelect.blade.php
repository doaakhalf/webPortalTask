<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
   
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    


    @yield('customScript')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    
   
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}">

{{-- /////////// --}}
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/superhero/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/multi-select/css/jquery.dropdown.css') }}">
    <script type="text/javascript" src="{{ asset('assets/multi-select/js/mock.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('assets/multi-select/js/jquery.dropdown.js') }}"></script>

{{-- //////////// --}}
    <!-- Latest compiled and minified JavaScript -->

    @yield('customStyle')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>


                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>