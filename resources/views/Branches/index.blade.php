@extends('layouts.app')

@section('title' , 'Branch List')

@section('menupart')

<!-- This Part is the Branch list part which is the same as menu part without bottom border -->   
<div class="Left-Part" id="Branch">
  <a href="/Branches/create"><button type="button" class="add">Add New</button></a>  
  <h3 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Branch</span> List</h3>
  <a href="/Branches"><button type="button" class="shape top-space">Branch List</button></a> 
</div> 

@endsection


@section('content')
    
    <!-- Branch List Part -->
    <div class="Branch-List animated bounceInUp">
        <h4 class="search mt-4">Search Here</h4>
        <form action="/Branches/search" method="post">    
          <input type="text" name="search" class="search-input">    
          <input type="submit" name="search-btn" class="search-btn" value="Search">
          @csrf
        </form>

        <!-- Here We have our Branch List Table --> 
        <div class="table">
           <table align = "center" border="1px" class="text-center text-white w-100">
              <tr>
                <th colspan = "5"><h4>BRANCH LIST</h4></th>
              </tr>
              <tr>
                 <th> Branch Number </th>
                 <th> Branch Name </th>      
                 <th> Location </th>     
                 <th> Manager </th>            
                 <th> Manager Phone</th>            
              </tr>

              @foreach ($BigTableKey as $b)
                <tr>
                  <td>{{ $b->branch_number }}</td>
                  <td>{{ $b->branch_name }}</td>
                  <td>{{ $b->location }}</td>
                  <td>{{ $b->manager }}</td>
                  <td>{{ $b->manager_phone }}</td>
                </tr>
              @endforeach  
           </table>  
        </div> 
        
        <!-- This part is the card part of Branch list div that we have our general information -->
        <div class="Result-card">
          <table align = "center" border="1px" class="text-center text-white w-100">
            <tr>
              <td>Total Branches</td>
              <td>{{ $Total_Branches }}</td>          
            </tr>
          </table> 
        </div> 
    </div>
@endsection  