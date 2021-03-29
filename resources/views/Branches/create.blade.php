@extends('layouts.app')

@section('title' , 'Add New Branch')

@section('menupart')

<!-- This Part is the Branch list part which is the same as menu part without bottom border -->   
<div class="Left-Part" id="Branch">
  <a href="/Branches/create"><button type="button" class="add">Add New</button></a>  
  <h3 class="font-weight-bold ml-2 text-white title menu-title"><span class="text-black">Branch</span> List</h3>
  <a href="/Branches"><button type="button" class="shape top-space">Branch List</button></a> 
</div> 

@endsection


@section('content')

    <!-- Here we have our div which contains the adding new branch part -->   
    <div class="Newbranch-part animated bounceInUp">
        <h2 class="Addnew-title">Add New Branch</h2>
        <form action="/Branches" method="post">
          <label for="#id" class="label1">Branch Number : </label>    
          <input type="number" name="number" class="input Number" disabled>
          <label for="#id" class="label2">Branch Name : </label>    
          <input type="text" name="name" class="input Name" required>
          <label for="#id" class="label4">Location : </label>    
          <input type="text" name="location" class="input Location" required> 
          <label for="#id" class="label3">Manager : </label>    
          <input type="text" name="manager" class="input Manager" required>
          <label for="#id" class="label5">Manager Phone : </label>
          <input type="number" name="phone" class="input Phone" required>
            
          <input type="submit" name="Branchsave" class="save-btn" value="Save">       
          <input type="submit" name="cancel" class="cancel-btn" value="Cancel"> 
          @csrf      
        </form>
    </div>
@endsection        