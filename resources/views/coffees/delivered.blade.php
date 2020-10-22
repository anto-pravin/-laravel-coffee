@extends('layouts.app');

@section('content')
    <div style="background-color: whitesmoke;">
        <div class="container">
            <h1 class="my-5 text-center pb-2" style="border-bottom: solid;">Orders Delivered</h1>
            <ul class="list-unstyled row">
            @foreach($coffees as $coffee)
                <li class="media col-md-4 col-sm-6 my-3">
                    <img src="/img/{{$coffee->type}}.png" class="img mr-3" height="50px" alt="...">
                    <div class="media-body">
                        <a href="/coffee/{{ $coffee->id }}"><h4 class="mt-0 mb-1"><strong> {{ $coffee->name }} </strong></h4></a>
                        {{ $coffee->type }}
                    </div>
                </li>
            @endforeach
            <br style="margin-bottom:150px">
        </div>
    </div>

@endsection