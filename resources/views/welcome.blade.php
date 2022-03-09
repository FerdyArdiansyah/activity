<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')
        <main class="">
            <div class="jumbotron"  style="background-size: cover; background-position:center; background-image: url('img/bg-register.jpg') ">
                <div class="container">
                    <h4>Managenet Evenet</h4>
                    <h1>Smk Al Bahri</h1>
                    <h6>Jl. Yon Armen 7 No 145 rt 044</h6>
                    </div>
                </div>
            @yield('content')
        </main>
    </div>
</body>
</html>

@section('css')
<style>
    body{
        background-color: #fff;
        color: #636b6f;
        font-family: 'Montserrat', sans-serif;
        font-weight: 200;
        height: 150vh;
        margin: 0;
    }
</style>
@endsection