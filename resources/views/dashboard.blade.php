@extends('layout.header')
@section('main')
    <div class="container">
        @if (Auth::check())
            <P class="text-6xl m-10 font-thin">WELCOME BACK!, <b>{{ auth::user()->name }}</b></P> 
        @endif
    </div>
@endsection