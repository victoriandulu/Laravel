<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('frontend/css/bootStrap5.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
        
    </head>

    <body>
        
        <div>
            @include('layouts.inc.navbar')
            @yield('content')
        </div>
        
        <script src="{{asset('frontend/js/bootStrap5.bundle.js')}}"></script>
              <script src="{{asset('frontend/js/frontend/js/jquery-3.7.1.min.js')}}"></script>
    </body>
</html>
