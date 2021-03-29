@extends('layouts.app')

@section('menupart')

      <!-- This Part is the Category list part which is the same as menu part without bottom border -->   
      <div class="Left-Part animated bounceInUp" id="Category">
        <a href="Products/create"><button type="button" class="add">Add New</button></a>  
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