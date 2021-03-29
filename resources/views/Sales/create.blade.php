@extends('layouts.app')

@section('title' , 'Buy Item')

@section('menupart')

<!-- Customer List part of the application -->
<div class="Left-Part" id="Customer">    
   <a href="Sales/create"><button type="button" class="add">Buy Now</button></a>
   <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Customer</span> List</h4>
   <a href="/Customers"><button type="button" class="shape top-space active">Customers</button></a>
</div>

@endsection


@section('content')

    <!-- Buy Method Part Of the app -->
    <div class="Buy-Method-part animated bounceInUp">
        <h2 class="Addnew-title">Buying Form</h2>
        <form action="/Sales" method="post">
          <label for="#id" class="label1">Product Name : </label>    
          <input type="text" name="name" class="input ID" required>
          
          <label for="#id" class="label2">Product Amount : </label>    
          <input type="number" name="amount" class="input Name" required>
          <label for="#id" class="label7">Sale Price : </label>    
          <input type="number" name="price" class="input Sale" required>
          <select class="select" name="selection">
             <option>AF</option>
             <option disabled>$</option>
             <option disabled>Rupees</option>
             <option disabled>Euro</option>
          </select>    
          <label for="#id" class="label4">Number : </label>    
          <input type="number" name="number" class="input Store" required> 
          <label for="#id" class="label3">Account : </label>    
          <input type="email" name="account" class="input Amount" required>
          <label for="#id" class="label6">Product Category : </label>    
          <select class="category" name="category">
             <option>Mobile</option>  
             <option>Computer</option>  
             <option>Watch</option>  
             <option>Shoe</option>  
             <option>Shirt</option>  
             <option>Trouser</option>  
             <option>Coat</option>  
          </select> 
          <label for="#id" class="label8">Product Size : </label> 
          <select class="Size" name="size">
             <option>SM</option>
             <option>MD</option>
             <option>LG</option>
          </select>
          <input type="submit" name="buy" class="save-btn" value="Buy">       
          <input type="button" name="cancel" class="cancel-btn" value="Cancel"> 
          @csrf      
        </form>
    </div>
@endsection       