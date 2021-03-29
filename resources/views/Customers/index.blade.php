@extends('layouts.app')

@section('title' , 'Customer List')

@section('menupart')

<!-- Customer List part of the application -->
<div class="Left-Part" id="Customer">    
   <a href="Sales/create"><button type="button" class="add">Buy Now</button></a>
   <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Customer</span> List</h4>
   <a href="/Customers"><button type="button" class="shape top-space active">Customers</button></a>
</div>

@endsection


@section('content')

     <!-- Customer Show Table Part -->
     <div class="Customer-part animated bounceInUp">
       <h3 class="Table-title font-weight-bold mt-3"><span class="text-black">Customer</span> Table</h3> 
       <form action="Customers/search" method="post">     
         <input type="text" name="customer-search" class="customer-search">
         <input type="submit" name="customer-search-btn" class="customer-searchbtn" value="Search">
         @csrf
       </form>

       <!-- Customer General information card -->     
       <div class="info-div">
         <table align = "center" border="1px" class="text-center text-white w-100">
            <tr>
              <td>Total Customers</td>
              <td>{{ $Total_Customers }}</td>         
            </tr>
            <tr>
              <td>Total Paid</td>
              <td>{{ $Total_Paid }}</td>   
            </tr>
         </table>   
       </div>
         
       <!-- Here is our Customer Table part div -->      
       <div class="customer-table"> 
         <table align = "center" border="1px" class="text-white text-center w-100">
            <tr>
            <th colspan = "7"><h3 class="my-2 font-weight-bold">CUSTOMER LIST</h3></th>
            </tr>
            <tr>
                <th> Customer_ID </th>
                <th> Customer_Name </th>     
                <th> Phone_Number </th>      
                <th> Gender </th>      
                <th> Bought_Product </th>      
                <th> Product_Price </th>     
                <th> Paid </th>     
            </tr>

            @foreach ($Customer as $C)
              <tr>
                <td>{{ $C->id }}</td>
                <td>{{ $C->customer_name }}</td>
                <td>{{ $C->phone_number }}</td>
                <td>{{ $C->gender }}</td>
                <td>{{ $C->bought_product }}</td>
                <td>{{ $C->product_price }}</td>
                <td>{{ $C->paid }}</td>
              </tr>
            @endforeach 

         </table> 
       </div>
     </div>     

@endsection       