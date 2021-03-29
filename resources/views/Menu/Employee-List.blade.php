@extends('layouts.app')

@section('menupart')

      <!-- This Part is the Employee list part which is the same as menu part without bottom border -->   
      <div class="Left-Part animated bounceInUp" id="Employee">
        <a href="/Employees/create"><button type="button" class="add">Add New</button></a>  
        <h4 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Employee</span> List</h4>
        <a href="/Employees"><button type="button" class="shape top-space">Employee List</button></a>
      </div>

@endsection