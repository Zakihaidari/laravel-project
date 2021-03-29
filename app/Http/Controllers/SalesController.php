<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Computer;
use App\Watch;
use App\Shoe;
use App\Shirt;
use App\Trouser;
use App\Coat;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index () {
        $Total_Money = 0;

        $BigTableKey = Sale::all();

        $Total_Product = DB::table('sales')->sum('product_amount');
        
        foreach ($BigTableKey as $money) {
            $totalmoneyofeachrow = (($money->product_amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }

        return view('Sales.index' , compact('BigTableKey' , 'Total_Product' , 'Total_Money'));

    }


    public function create() {
       
        return view('Sales.create');
    }


    public function store () {

        if (request('category') == 'Mobile') {
           $prod = new Mobile();
        } else if (request('category') == 'Computer') {
           $prod = new Computer();    
        } else if (request('category') == 'Watch') {
           $prod = new Watch();    
        } else if (request('category') == 'Shoe') {
           $prod = new Shoe();    
        } else if (request('category') == 'Shirt') {
           $prod = new Shirt();    
        } else if (request('category') == 'Trouser') {
           $prod = new Trouser();    
        } else if (request('category') == 'Coat') {
           $prod = new Coat();    
        }

        $name = request('name');
        $category = request('category');

       if ( ! $prod->where('name' , request('name'))->first() == NULL) {
        
         $id = $prod->where('name' , request('name'))->sum('id');
         $date = $prod->where('name' , request('name'))->sum('store_date');
         $alert = $prod->where('name' , request('name'))->sum('alert');

         $firstamount = $prod->where('name' , request('name'))->sum('amount');
         $boughtamount = request('amount');
         $newamount = ($firstamount - $boughtamount);

         $prod->where('name' , request('name'))->update(array(
           'id' => $id,
           'name' => request('name'),
           'category' => request('category'),
           'amount' => $newamount, 
           'sale_price' => request('price'),
           'size' => request('size'),
           'store_date' => $date,
           'alert' => $alert,

         ));
        
         $product = new Sale();
        
         $product->product_name = request('name');
         $product->product_amount = request('amount');
         $product->category = request('category');
         $product->sale_price = request('price');
         $product->customer_account = request('account');
         $product->customer_phone = request('number');
         $product->product_size = request('size');
         $product->save();

         return redirect('Sales/create')->with('message' , 'Congratulation!!: you bought a new '.$name.' '.$category); 
       }
       else {
         return redirect('Sales/create')->with('message' , 'Sorry!!: We Don\'t have '.$name.' '.$category.' in our Shop.'); 
       } 
    }


    public function search () {
       
        $searchTerm = request('search');

        $BigTableKey = Sale::all()->where('product_name' , $searchTerm);

        $Total_Product = Sale::all()->where('product_name' , $searchTerm)->count();
        
        $Total_Money = ($BigTableKey->sum('product_amount')) * ($BigTableKey->sum('sale_price'));

        return view('Sales.index' , compact('BigTableKey' , 'Total_Product' , 'Total_Money'));
 
    }
}
