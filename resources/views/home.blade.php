@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>

                    <p><a href="{{ route('coffees.index') }}">View all Orders</a></p>
                    <p><a href="{{ route('updateSearch') }}">Update Orders</a></p>
                    <p><a href="{{ route('coffees.delivered') }}">Delivered Orders</a></p>
                    <p><a href="{{ route('users') }}">All Users</a></p>
                    <p><a href="/" class="text-center" style="color:gray; text-decoration:none">
                    <strong>
                        <-Back to Home
                    </strong>
                </a>
            </p>
        </div>
    </div>
</div>
@endsection