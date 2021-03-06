<!-- 
StAuth10065: I Tommy Nguyen, 000786251 certify that this material is my original work.
 No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
-->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','laravel')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1 class="text-center">HOTEL</h1>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
       @yield('content')
        </div>
        <footer id="footer" class="navbar navbar-expand navbar-dark text-white bg-dark">
            <p >Copyright 2020</p>
            </footer>
    </body>
</html>