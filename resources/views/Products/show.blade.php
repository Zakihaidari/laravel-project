@extends('layouts.app')

@section('title' , 'Details for ' . $product->name)

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
   </div>

@endsection

@section('content')

    <!-- This part is the table part that we are going to show our data here -->
    <div class="Show-part animated bounceInUp details">
       <div class="row">
          <div class="col-12 mt-5 text-center">
            <p class="text-white size">Details for {{ $product->name }}</p>
          </div>  
       </div>  

       <div class="row my-3">
         <div class="col-12 text-center">
            <table align = "center" border="1px" class="text-white text-center w-50">
               <tr>
                 <td>ID</td>
                 <td>{{ $product->id }}</td>      
               </tr>
               <tr>
                 <td>Name</td>
                 <td>{{ $product->name }}</td>      
               </tr>
               <tr>
                 <td>Category</td>
                 <td>{{ $product->category }}</td>      
               </tr>
               <tr>
                 <td>Amount</td>
                 <td>{{ $product->amount }}</td>      
               </tr>
               <tr>
                 <td>Sale Price</td>
                 <td>{{ $product->sale_price }}</td>      
               </tr>
               <tr>
                 <td>Size</td>
                 <td>{{ $product->size }}</td>      
               </tr>
               <tr>
                 <td>Store Date</td>
                 <td>{{ $product->store_date }}</td>      
               </tr> 
            </table>      
         </div>
       </div>

       <div class="row my-4 text-center">
         <div class="col-12">
           <a href="/Products/{{ $product->id }}/{{ $product->category }}/edit"><button type="button" class="btn btn-primary px-3 mx-2 d-inline">Edit</button></a>
           <form action="/Products/{{ $product->id }}/{{ $product->category }}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf  
              <button type="submit" class="btn btn-danger mx-2">Delete</button>  
           </form>
         </div>  
       </div>

    </div>  
@endsection    