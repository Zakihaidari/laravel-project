@extends('layouts.app')

@section('menupart')

     <!-- Customer List part of the application -->
     <div class="Left-Part animated bounceInUp" id="Customer">    
        <a href="Sales/create"><button type="button" class="add">Buy Now</button></a>
        <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Customer</span> List</h4>
        <a href="/Customers"><button type="button" class="shape top-space active">Customers</button></a>
     </div>

@endsection