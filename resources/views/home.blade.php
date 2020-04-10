@extends('layouts.header')

@section('content')
{{--<div class="container main-content">--}}
<div class="container main-content">

    <div id="app">
        <div>
            <router-view></router-view>
        </div>
        <div class="d-flex justify-content-between toolbar">
            <router-link class="single-tab mx-auto" to="/home/background">Background</router-link>
            <router-link class="single-tab mx-auto" to="/home/equipment">Equipment</router-link>
            <router-link class="single-tab mx-auto" to="/home/spells">Spells</router-link>
            <router-link class="single-tab mx-auto" to="/home/stats">Stats</router-link>
        </div>
    </div>

</div>


<!-- Pack it up pack it in (Vue) -->
<script src="{{ asset('js/app.js') }}"></script>
@endsection

