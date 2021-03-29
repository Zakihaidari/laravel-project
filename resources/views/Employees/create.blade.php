@extends('layouts.app')

@section('title' , 'Add New Employee')

@section('menupart')

<!-- This Part is the Employee list part which is the same as menu part without bottom border -->   
<div class="Left-Part" id="Employee">
  <a href="/Employees/create"><button type="button" class="add">Add New</button></a>  
  <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Employee</span> List</h4>
  <a href="/Employees"><button type="button" class="shape top-space">Employee List</button></a>
</div>

@endsection


@section('content')
    <!-- Here we have our div which contains the adding new Employee part -->   
    <div class="Newemployee-part animated bounceInUp">
        <h2 class="Addnew-title">Add New Employee</h2>
        <form action="/Employees" method="post">
          <label for="#id" class="label1">Employee ID : </label>    
          <input type="number" name="id" class="input Number" disabled>
          <label for="#id" class="label2">First Name : </label>    
          <input type="text" name="firstname" class="input Name" required>
          <label for="#id" class="label6">Last Name : </label>    
          <input type="text" name="lastname" class="input Name2" required>
          <label for="#id" class="label4">Email : </label>    
          <input type="email" name="email" class="input Email" required> 
          <label for="#id" class="label3">Gender : </label>    
          <input type="text" name="gender" class="input Gender" required>
          <label for="#id" class="label5">Phone Number : </label>
          <input type="number" name="phone" class="input Phone" required>
          <label for="#id" class="label7">Salary : </label>
          <input type="number" name="salary" class="input Salary" required>
          <label for="#id" class="label8">Register Date : </label>
          <input type="date" name="date" class="input Date" required>
            
          <input type="submit" name="Employeesave" class="save-btn" value="Save">       
          <input type="submit" name="cancel" class="cancel-btn" value="Cancel"> 
          @csrf      
        </form>
    </div> 
@endsection    
  
