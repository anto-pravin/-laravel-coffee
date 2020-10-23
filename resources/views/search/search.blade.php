@extends('layouts.app')

@section('content')
  <div class="container box mt-3" style="border: 1px solid grey">
   <h2 class="text-center pt-2">Coffee Orders</h2>
   <div class="panel panel-default">
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Orders" />
     </div>
     <div class="table-responsive">
      <h3 class='text-center'>Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Branch</th>
        <th scope="col">Type</th>
        <th scope="col">Sugar</th>
        <th scope="col">Addons</th>
        <th scope="col">Sugar Quantity</th>
        <th scope="col">Other</th>
        <th scope="col">Address</th>
        <th scope="col">Quantity</th>
        <th scope='col'>Update</th>

        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>

     </div>
    </div>    
   </div>
  </div>
        <br><br><br>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
@endsection