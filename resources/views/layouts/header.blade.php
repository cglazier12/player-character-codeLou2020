<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">



</head>
<body>
<header class="header">

    <div class="top-left">
        <h1 class="player-character">Player<br>Character</h1>
    </div>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/test') }}">Test</a>
            @else
                <a href="{{ route('login') }}">Login</a>

            @endauth

            @endif
        </div>

</header>
<div class="hr">
    <hr class="mx-auto">
</div>

<main>
    @yield('content')
</main>

</body>
<script src="https://kit.fontawesome.com/80f7c440dd.js" crossorigin="anonymous"></script>

</html>
