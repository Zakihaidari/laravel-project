@extends('layouts.app')

@section('title' , 'Add New Product')

@section('menupart')

<!-- This Part is the Category list part which is the same as menu part without bottom border -->   
<div class="Left-Part" id="Category">
  <a href="/Products/create"><button type="button" class="add">Add New</button></a>  
  <h2 class="font-weight-bold text-center text-white title menu-title"><span class="text-black">Category</span> List</h2>
  <a href="/mobiles_table"><button type="button" class="shape top-space active"><span>Mobile</span></button></a>
  <a href="/computers_table"><button type="button" class="shape"><span>Computer</span></button></a>
  <a href="/watches_table"><button type="button" class="shape"><span>Watch</span></button></a>
  <a href="/shoes_table"><button type="button" class="shape"><span>Shoe</span></button></a>
  <a href="/shirts_table"><button type="button" class="shape"><span>Shirt</span></button></a>
  <a href="/trousers_table"><button type="button" class="shape"><span>Trouser</span></button></a>
  <a href="/coats_table"><button type="button" class="shape"><span>Coat</span></button></a>
  </form>  
</div>

@endsection

@section('content')

  <!-- This part is The Add new product part that we can add new item. here we have some input forms -->
  <div class="New-part animated bounceInUp">
      <h2 class="Addnew-title">Add New Product</h2>
      <form action="/Products" method="post">
        @include('Products.form') 
              
        <input type="submit" name="save" class="save-btn" value="Save">       
        <input type="submit" name="cancel" class="cancel-btn" value="Cancel">        
      </form>
  </div>
@endsection 