@extends('layouts.app')

@section('title' , 'Welcome to Alpha Shop')

@section('Welcome')
 <!-- The Welcome page view -->
 <div class="Welcome animated bounceInUp" id="Contact">
    <div class="img-frame mb-5 animated bounceInUp">
      <img src="image/logo.jpg" class="image">
      <h6 class="text-black font-weight-bold ml-1 mt-1 title">Alpha <span class="text-white">Shop</span></h6>    
    </div> 
    <h1 class="text-white display-4 text-center m-0 p-0">
       <span class="animated fadeIn welcome">Welcome </span>
       <span class="animated fadeIn to">To </span> 
       <span class="text-black font-weight-bold animated fadeIn alpha">Alpha </span>
       <span class="animated fadeIn shop">Shop. </span>
    </h1>
    <p class="text-white sub-title text-center m-0 p-0 animated fadeIn">Alpha a simple store management system.</p> 

    <div class="list mt-5 text-white d-flex">
      <ul class="ml-auto mr-auto">
         <li class="animated fadeIn first">Has Registeration and Login Form.</li>
         <li class="animated fadeIn second">Your are able to Insert, Delete and Update Products.</li>
         <li class="animated fadeIn third">Your are able to See all Products.</li>
         <li class="animated fadeIn fourth">Your are able to See The Sold Products.</li>
         <li class="animated fadeIn fifth">Your are able to See The Customers list.</li> 
      </ul>
    </div>
 </div>

@endsection