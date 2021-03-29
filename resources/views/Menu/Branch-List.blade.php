@extends('layouts.app')

@section('menupart')

      <!-- This Part is the Branch list part which is the same as menu part without bottom border -->   
      <div class="Left-Part animated bounceInUp" id="Branch">
        <a href="/Branches/create"><button type="button" class="add">Add New</button></a>  
        <h3 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Branch</span> List</h3>
        <a href="/Branches"><button type="button" class="shape top-space">Branch List</button></a> 
      </div> 

@endsection