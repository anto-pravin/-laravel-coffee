@extends('layouts.layout')

@section('content')
    <div class="" style="background-color: whitesmoke;">
    <div class="text-center mt-5">
        <img src="/img/ccd-logo.png" alt="Logo" class="img text-center" height="75px">
    </div>
    
    <div class="wrapper order-coffee">
        <h1 class="text-center">Make your day Awesome!!</h1>
        <legend class="text-center pb-5">Place your Order Here</legend>
        <form class="needs-validation" method="post" action="{{ route('coffee') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Name</label>
                <input type="text" class="form-control" id="validationTooltip01" name='name' value="" placeholder="Name" required>
                </div>
                <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Choose the Branch</label>
                <select class="custom-select" id="validationTooltip04" name='branch' required>
                    <option selected disabled value="">Choose...</option>
                    <option value='Coimbatore North'>Coimbatore North</option>
                    <option value='Coimbatore East'>Coimbatore East</option>
                    <option value='Race Coarse'>Race Coarse</option>
                    <option value='Brook Fields'>Brook Fields</option>
                </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Type of Coffee</label>
                <select class="custom-select" name='type' id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option value='AFFOGATO'>AFFOGATO</option>
                    <option value='EXPRESSO'>EXPRESSO</option>
                    <option value='CAFFÈ LATTE'>CAFFÈ LATTE</option>
                    <option value='CAFFÈ MOCHA'>CAFFÈ MOCHA</option>
                    <option value='CAFÈ AU LAIT'>CAFÈ AU LAIT</option>
                    <option value='CAPPUCCINO'>CAPPUCCINO</option>
                    <option value='COLD BREW COFFEE'>COLD BREW COFFEE</option>
                    <option value='DOPPIO'>DOPPIO</option>
                    <option value='FLAT WHITE'>FLAT WHITE</option>
                    <option value='FRAPPÉ'>FRAPPÉ</option>
                    <option value='IRISH COFFEE'>IRISH COFFEE</option>
                </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Sugar</label>
                    <select class="custom-select" name='sugar' id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value='White'>White</option>
                        <option value='Brown'>Brown</option>
                        <option value='Sugar-Free'>Sugar-Free</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                <label for="customRange2">Sugar Quantity - (Cubes)</label>
                <input id="customRange2"  type="range" name="rangeInput" min="1" max="4" step='1' value='1' onchange="updateTextInput(this.value);">
                <input type="text" class="text-center mt-0" id="textInput" name='sugarquantity' value="1 cube">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip04">Add-on</label>
                    <select class="custom-select" name='addons' id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value='Whipped Cream'>Whipped Cream</option>
                        <option value='Ice Cream'>Ice Cream</option>
                        <option value='Chocolate Syrup'>Chocolate Syrup</option>
                        <option value='Vanilla Syrup'>Vanilla Syrup</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip04">Others</label>
                    <select class="custom-select" name='other' id="validationTooltip04" required>
                        <option selected disabled value="">Choose...</option>
                        <option value='Hot'>Hot</option>
                        <option value='Cold'>Cold</option>
                        <option value='Extra Strong'>Extra Strong</option>
                        <option value='Original'>Original</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationTooltip01">Quantity</label>
                <input type="text" class="form-control" name='quantity' id="validationTooltip01" value="" required placeholder="Quantity">
                </div>
                
            </div>

            <div class="form-row">
                <div class="col-md mb-3">
                <label for="validationTooltip01">Full Address</label>
                <input type="text" class="form-control" name='address' id="validationTooltip01" value="" required placeholder="Address">
                </div>
            </div>
            <div class="text-center">
                <button class="btn" style="background-color:#C30327; color: white" type="submit">Place Order</button>
            </div>
            
        </form>
    </div>
    </div>
    <script>
        function updateTextInput(val) {
            if(val == 1){
                document.getElementById('textInput').value= val + ' cube';
            }
            else{
                document.getElementById('textInput').value= val + ' cubes';
            }
           
        }
    </script>
@endsection