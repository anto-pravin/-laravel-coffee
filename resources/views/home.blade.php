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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
