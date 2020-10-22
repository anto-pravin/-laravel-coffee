@extends('layouts.layout')

@section('content')
<div class="text-center">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Admin Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif

    <div class="pt-5 mt-5">
        <img src="/img/ccd-logo.png" alt="Logo" class="img-fluid pb-5" style="margin-top:auto; margin-bottom: auto;"> 
        <h1><strong class="title">The Best coffee in the world</strong></h1>
    </div>
    <a href="/coffee/create" class="pr-5">Place Order</a>
    <a href="/aboutus" class="pl-5">About Us</a>
</div>
@endsection