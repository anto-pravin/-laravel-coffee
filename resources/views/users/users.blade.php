@extends('layouts.app')

@section('content')
<div style="background-color: whitesmoke;">
    <div class="container">
        <h1 class="my-5 text-center pb-2" style="border-bottom: solid;">Customer List</h1>
        <ul class="list-unstyled row">
            @foreach($users as $user)
            <li class="media col-md-4 col-sm-6 my-3">
                <div class="media-body">
                    <a href="/coffee/{{ $user->id }}">
                        <h4 class="mt-0 mb-1"><strong> {{ $user->name }} </strong></h4>
                    </a>
                </div>
            </li>
            @endforeach
            <br style="margin-bottom:150px">
            <div class="container text-center">
                <a class="" href="{{ route('home') }}">
                    <strong><- Back to Dashboard</strong> 
                </a>
            </div>
        </ul>
    </div>
</div>
@endsection