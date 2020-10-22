@extends('layouts.app')

@section('content')
    <div class="" style='background-color:whitesmoke;'>
    <h1 class="text-center">Order for {{ $coffee->name }}</h1>
        <div class="card mx-auto" style="width: 350px;border: 2px grey solid; background-color:whitesmoke;">
            <img src="/img/{{ $coffee->type }}.png" class="card-img-top pt-1 px-5" alt="...">
            <div class="card-body text-center m-auto">
                <h5 class="card-title"><strong>{{ $coffee->type }}</strong></h5>
                <p class="card-text"><strong>Sugar -</strong> {{ $coffee->sugar }} - {{ $coffee->sugarquantity }}</p>
                <p class="card-text"><strong>Add-ons -</strong> {{ $coffee->addons }} </p>
                <p class="card-text"><strong>Others -</strong> {{ $coffee->other }} </p>
                <p class="card-text"><strong>Quantity -</strong> {{ $coffee->quantity }} </p>
                <p class="card-text"><strong>Address -</strong> {{ $coffee->address }} </p>
                <form class="" action="/coffee/ {{ $coffee->id }}" method="post">
                    @csrf
                    <button class='btn btn-danger' value='{{ $coffee }}'>Delivered</button>
                </form>
                <br>
                <a class="ml-0" href="/coffee"><strong><- Back to all Orders</strong></a>
            </div>
        </div>
        
    </div>
@endsection