@extends('layouts.header')

@section('content')
{{--<div class="container main-content">--}}


    <div id="app">
        <div class="vue-content">
            <router-view></router-view>
        </div>
        <div class="d-flex justify-content-between vue-toolbar">
            <router-link class="single-tab" to="/home/background">Background</router-link>
            <router-link class="single-tab" to="/home/equipment">Equipment</router-link>
            <router-link class="single-tab" to="/home/spells">Spells</router-link>
            <router-link class="single-tab" to="/home/stats">Stats</router-link>
        </div>
    </div>




<script src="{{ asset('js/app.js') }}"></script>
@endsection

