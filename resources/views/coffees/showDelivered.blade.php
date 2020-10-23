@extends('layouts.app')

@section('content')
    <div class="" style='background-color:whitesmoke;'>
    <h1 class="text-center">Order for {{ $coffee->name }}</h1>
        <div class="card mx-auto" style="width: 350px;border: 2px grey solid; background-color:whitesmoke;">
            <img src="/img/{{ $coffee->type }}.png" class="card-img-top pt-1 px-5" alt="...">
            <div class="card-body m-auto">
                <h5 class="card-title text-center"><strong>{{ $coffee->type }}</strong></h5>
                <p class="card-text pl-2"><strong>Sugar -</strong> {{ $coffee->sugar }} - {{ $coffee->sugarquantity }}</p>
                <p class="card-text pl-2"><strong>Add-ons -</strong> {{ $coffee->addons }} </p>
                <p class="card-text pl-2"><strong>Others -</strong> {{ $coffee->other }} </p>
                <p class="card-text pl-2"><strong>Quantity -</strong> {{ $coffee->quantity }} </p>
                <p class="card-text pl-2"><strong>Address -</strong> {{ $coffee->address }} </p>
                <br>
                <a class="ml-0 text-center" href="{{ route('coffees.delivered') }}"><strong><- Back to Delivered List</strong></a>
            </div>
            
        </div>
        
    </div>
@endsection