@extends('layouts.app');

@section('content')
    <div class="container" style='border:1px solid darkgrey;border-radius:5px'>
        <div class="row">
            <input type="text" placeholder='Search Document' style='background-color:white;border: 1px solid grey;border-radius: 3px' class='col-md-4 col-sm p-1 ml-auto my-3 mx-2'>
        </div>
        <legend class='text-center'><strong>Order Details</strong></legend>
    
        <div class='container table-responsive mt-3'>
            <table class="table table-hover" style='border:solid grey; border-radius:3px'>

            
            <thead>
                <tr>
                <th scope="col"><strong>Id</strong></th>
                <th scope="col"><strong>Name</strong></th>
                <th scope="col"><strong>Branch</strong></th>
                <th scope="col"><strong>Type</strong></th>
                <th scope="col"><strong>Sugar</strong></th>
                <th scope="col"><strong>SugarQuantity</strong></th>
                <th scope="col"><strong>Addons</strong></th>
                <th scope="col"><strong>Others</strong></th>
                <th scope="col"><strong>Quantity</strong></th>
                <th scope="col"><strong>Address</strong></th>
                <th scope='col'><strong>Update</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach($coffees as $coffee)
                    <tr>
                    <th scope="row"> {{ $coffee->id }} </th>
                    <td>{{ $coffee->name }}</td>
                    <td> {{ $coffee->branch }} </td>
                    <td>{{ $coffee->type }}</td>
                    <td>{{ $coffee->sugar }}</td>
                    <td>{{ $coffee->sugarquantity }}</td>
                    <td>{{ $coffee->addons }}</td>
                    <td>{{ $coffee->other }}</td>
                    <td>{{ $coffee->quantity }}</td>
                    <td>{{ $coffee->address }}</td>
                    <td>
                        <a href="{{ route('coffees.updateForm',$coffee->id) }}" class='p-1' style='text-decoration:none; border-radius:4px; color:white;border:0;background-color:#C30327'>
                            update
                        </a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <br>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection