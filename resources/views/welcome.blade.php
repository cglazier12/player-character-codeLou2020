<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:300,400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #303030;
                font-family: 'IBM Plex Mono', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .header {
                position: fixed;
                height: 89px;
                width: 100%;
                top: 0;
                display: flex;
                justify-content: space-between;
                background-color: #fff9ed;
                filter: drop-shadow(2px 4px 4px #303030);
            }

            .player-character {
                font-weight: 400;
                color: #000;
                margin: 0;
            }

            .top-left {
                margin-top: auto;
                padding: 0 0 5px 5px;
            }

            .top-right {
                margin: auto 0 5px 0;
                padding-bottom: 4px;
                display: flex;
                justify-content: space-between;
            }

            .links > a {
                color: #303030;
                padding: 0 15px;
                font-size: 13px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .main-content h3 {
                padding: 15px;
                margin: 89px auto 0;
                font-weight: 400;
                text-align: center;
            }

            .main-content {
                height: 100%;
                margin: 0;
                padding: 0 25px;
                background: linear-gradient(180.0deg, #FFF9ED 25%, rgba(255, 255, 255, 0.71) 100.0%);
            }

            .main-content p {
                text-indent: 40px;
                margin: 0;
                padding-bottom: 15px;
            }

            .col-form-label {
                margin-left: 8px;
                font-size: 15px;
            }

            .form-control {
                width: 100%;
                height: 35px;
                margin: 10px 0 10px 0;
                border: none;
                background: #FFF9ED;
                box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);
            }

            button {
                font-family: 'IBM Plex Mono', sans-serif;
                font-size: 20px;
                border: none;
                padding: 1rem 2rem;
                margin: 15px 0 25px 0;
                text-decoration: none;
                background: #fff9ED;
                color: #000;
                box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);
            }

        </style>
    </head>
    <body>
        <header class="header">
            <div class="top-left">
                <h1 class="player-character">Player<br>Character</h1>
            </div>
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth

                @endif

            </div>
        </header>
        <div class="container main-content">
            <h3>Explore, Create, Level Up!</h3>
            <p>Your campaign lives here. Player Character provides a compendium of D&D 5e material to easily interact with your campaign as well as custom character sheets and personal templates, giving you access to the information you need so you can focus more on playing and less on clerical work.</p>
            <p>Search, organize, and display what you want. Player Character offers a minimalist interface for quick and easy navigation so you can stop staring at your character sheet and get back to the game!</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>



                <button type="submit" class="button mx-auto">
                    {{ __('Register') }}
                </button>


            </form>
        </div>
    </body>
</html>
