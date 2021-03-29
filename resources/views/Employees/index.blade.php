@extends('layouts.app')

@section('title' , 'Employee List')

@section('menupart')

<!-- This Part is the Employee list part which is the same as menu part without bottom border -->   
<div class="Left-Part" id="Employee">
  <a href="/Employees/create"><button type="button" class="add">Add New</button></a>  
  <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Employee</span> List</h4>
  <a href="/Employees"><button type="button" class="shape top-space">Employee List</button></a>
</div>

@endsection


@section('content')
    <!-- Employee List Part -->
    <div class="Employee-List animated bounceInUp">
        <h4 class="search mt-4">Search Here</h4>
        <form action="/Employees/search" method="post">    
          <input type="text" name="search" class="search-input" placeholder="Enter The First Name">    
          <input type="submit" name="search-btn" class="search-btn" value="Search">
          @csrf
        </form> 
          
        <!-- Here We have our Employee List Table -->  
        <div class="table">
           <table align = "center" border="1px" class="text-center text-white w-100">
              <tr>
                <th colspan = "6"><h4>EMPLOYEE LIST</h4></th>
              </tr>
              <tr>
                 <th> ID </th>
                 <th> Full Name </th>      
                 <th> Gender </th>     
                 <th> Phone </th>            
                 <th> Salary</th>            
                 <th> Register Date</th>            
              </tr>

              @foreach ($BigTableKey as $employee)
                <tr>
                  <td>{{ $employee->id }}</td> 
                  <td>{{ $employee->first_name }} {{  $employee->last_name }}</td> 
                  <td>{{ $employee->gender }}</td> 
                  <td>{{ $employee->phone_number }}</td> 
                  <td>{{ $employee->salary }}</td> 
                  <td>{{ $employee->register_date }}</td>  
                </tr>
              @endforeach

           </table>  
        </div>
        
        <!-- This part is the card part of Employee list div that we have our general information -->
        <div class="Result-card">
          <table align = "center" border="1px" class="text-center text-white w-100">
            <tr>
              <td>Total Employee</td>
              <td>{{ $Total_Employees }}</td>          
            </tr>
            <tr>
              <td>Total Salary</td>
              <td>{{ $Total_Salary }}</td>         
            </tr>  
          </table> 
        </div> 
    </div>
@endsection     
