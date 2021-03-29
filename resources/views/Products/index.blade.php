@extends('layouts.app')

@section('title' , 'Show Products')

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

    <!-- This part is the table part that we are going to show our data here -->
    <div class="Show-part animated bounceInUp">
        <h4 class="search text-white title">Search Here</h4>
        <form action="/Products/search" method="post">      
            <input type="text" name="search" class="search-input text-white" placeholder="Enter The Name">
            <select class="category" name="category">  
                <option>Mobile</option>  
                <option>Computer</option>  
                <option>Watch</option>  
                <option>Shoe</option>  
                <option>Shirt</option>  
                <option>Trouser</option>  
                <option>Coat</option>  
            </select>    
            <input type="submit" name="search-btn" class="search-btn" value="Search">
            @csrf
        </form>

        <!-- This part is the table part that we are going to show our data there -->
        <div class="table">
           <table align = "center" border="1px" class="text-white text-center w-100">
              <tr>
                <th colspan = "7"><h5 class="my-2 font-weight-bold">PRODUCT LIST</h5></th>
              </tr>
              <tr>
                 <th> ID </th>
                 <th> Name </th>      
                 <th> Category </th>     
                 <th> Amount </th>      
                 <th> Sale Price </th>      
                 <th> Size </th>      
                 <th> Store Date </th>     
              </tr>

              @foreach ($BigTableKey as $Product)
                <tr>
                  <td>{{ $Product->id }}</td>
                  <td><a href="Products/{{ $Product->id }}/{{ $Product->category }}">{{ $Product->name }}</a></td>
                  <td>{{ $Product->category }}</td>
                  <td>{{ $Product->amount }}</td>
                  <td>{{ $Product->sale_price }}</td>
                  <td>{{ $Product->size }}</td>
                  <td>{{ $Product->store_date }}</td>   
                </tr>
              @endforeach
              
           </table>
        </div>    
         
        <!-- Here is our php code for showing General information about our data in the result card -->   
        <div class="Result-card">
          <table align = "center" border="1px" class="text-white text-center w-100">
             <tr>
                <td>Total Category</td>
                <td>{{ $Total_Categories }}</td>     
             </tr>
             <tr>
                <td>Total Amount</td>
                <td>{{ $Total_Amount }}</td>
             </tr>
             <tr>
                <td>Total Money</td>
                <td>{{ $Total_Money }}</td>
             </tr>
          </table>
        </div>  
    </div>  
 
@endsection    