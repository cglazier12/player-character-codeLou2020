@extends('layouts.header')

@section('content')
{{--<div class="container main-content">--}}
<div class="container main-content">

    <div id="app">
        <toolbar></toolbar>
    </div>

</div>

<!-- Absolutely positioned Tabs -->

<!-- Pack it up pack it in (Vue) -->
<script src="{{ mix('js/app.js') }}"></script>
@endsection

