@extends('layouts.header')

@section('content')
<div class="container main-content">
    <h3>Explore, Create, Level Up!</h3>
    <div class="row">
{{--        <div class="d-flex">--}}
{{--            --}}
{{--        </div>--}}

        <div class="col call-to-action mx-auto">
            <p>Your campaign lives here. Player Character provides a compendium of D&D 5e material to easily interact with your campaign as well as custom character sheets and personal templates, giving you access to the information you need so you can focus more on playing and less on clerical work.</p>
            <p>Search, organize, and display what you want. Player Character offers a minimalist interface for quick and easy navigation so you can stop staring at your character sheet and get back to the game!</p>
        </div>
        <div class="col large-screens">
            <ul>
                <li>
                    Create and manage mobile-friendly D&D 5e Character Sheets.
                </li>
                <li>
                    Manage and share inventory items, equipment, weapons, and more.
                </li>
                <li>
                    Search and filter content from <a href="https://sw5e.com/">sw5e.com</a> to add to your inventory or edit you Character Sheet.
                </li>
                <li>
                    As a Game Master, you can invite others to join your group.
                </li>
            </ul>
        </div>

    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">

            <div class="col-12 col-md-8 mx-md-auto">

                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

        </div>

        <div class="form-group row">

            <div class="col-12 col-md-8 mx-md-auto">

                <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

        </div>

        <div class="form-group row">

            <div class="col-12 col-md-8 mx-md-auto">

                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

        </div>
{{--    Last Input field below, Register Button right below that  --}}

        <div class="form-group row">

            <div class="col-12 col-md-8 mx-md-auto">
                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

        </div>


        <div class="d-flex justify-content-center">
            <button type="submit" class="button">
                {{ __('Register') }}
            </button>
        </div>

    </form>
</div>
@endsection
