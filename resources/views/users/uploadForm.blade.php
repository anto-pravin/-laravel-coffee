@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form enctype="multipart/form-data" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")' action="{{ route('customerData') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" name='name' class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name='email' class="form-control" id="inputEmail4">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password1">Password</label>
                        <input type="password" class="form-control" id="password1" name='up' required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password2">Confirm Password</label>
                        <input type="password" class="form-control" id="password2" name='up2'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name='address' class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="file" class="pr-5" style="cursor: pointer;"><strong>
                            <h5>Click here to upload image</h5>
                        </strong></label>
                    <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;" required>
                    <img id="output" width="64">
                </div>


                <button type="submit" class="btn btn-primary">Register User</button>
            </form>
        </div>
    </div>
</div>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection