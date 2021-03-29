@extends('layouts.app')

@section('title' , 'Sales List')

@section('menupart')
     
     <!-- Sales List -->
     <div class="Left-Part" id="Sale">
        <a href="/Sales/create"><button type="button" class="add">Buy Now</button></a>
        <h3 class="font-weight-bold m-0 ml-4 p-0 text-white title menu-title"><span class="text-black">For</span> Sale</h3>
        <a href="Sales"><button type="button" class="shape top-space active">Sales List</button></a>
     </div> 


@endsection


@section('content')

    <!-- Sales List Part -->
    <div class="Sales-List animated bounceInUp">
        <h4 class="search mt-4">Search Here</h4>
        <form action="Sales/search" method="post">    
          <input type="text" name="search" class="search-input">    
          <input type="submit" name="search-btn" class="search-btn" value="Search">
          @csrf
        </form>

        <!-- Here We have our Sales List Table -->   
        <div class="table">
           <table align = "center" border="1px" class="text-center text-white w-100">
              <tr>
                <th colspan = "6"><h4 class="my-2 font-weight-bold">SALES LIST</h4></th>
              </tr>
              <tr>
                 <th> Product Name </th>
                 <th> Amount </th>      
                 <th> Category </th>     
                 <th> Price </th>     
                 <th> Customer Account </th>        
                 <th> Customer Phone </th>        
              </tr> 
              
              @foreach ($BigTableKey as $Product)
                <tr>
                  <td>{{ $Product->product_name }}</td>
                  <td>{{ $Product->product_amount }}</td>
                  <td>{{ $Product->category }}</td>
                  <td>{{ $Product->sale_price }}</td>
                  <td>{{ $Product->customer_account }}</td>
                  <td>{{ $Product->customer_phone }}</td>   
                </tr>
              @endforeach
            
           </table>
        </div>
        
        <!-- This part is the card part of sales list div that we have our general information -->   
        <div class="Result-card">
          <table align ="center" border="1px" class="text-center text-white w-100">
            <tr>
              <td>Total Product</td>
              <td>{{ $Total_Product }}</td>          
            </tr>
            <tr>
              <td>Total Money</td>
              <td>{{ $Total_Money }}</td>          
            </tr>
          </table>
        </div>  
      </div>  

@endsection         