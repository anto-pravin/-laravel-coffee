@extends('layouts.app')

@section('content')
<div class='container mx-auto my-5 text-center'>
    <div class="success-animation mb-5">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
        </svg>
    </div>
    <h1 class='mt-0 mb-5'>Updated Successfully</h1>
    <a href="{{ route('updateSearch') }}"><h3 class='py-5 mt-5'><-Back to Orders</h3></a>
</div>
@endsection
