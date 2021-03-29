<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function index () {
         
       $Customer = Customer::all();

       $Total_Customers = Customer::count();

       $Total_Paid = DB::table('customers')->sum('paid');

       return view('Customers.index' , compact('Customer' , 'Total_Customers' , 'Total_Paid'));
    }


    public function search () {

        $searchTerm = request('customer-search');

        $Customer = Customer::all()->where('customer_name' , $searchTerm);

        $Total_Customers = Customer::all()->where('customer_name' , $searchTerm)->count();
    
        $Total_Paid = $Customer->where('customer_name' , $searchTerm)->sum('paid');

        return view('Customers.index' , compact('Customer' , 'Total_Customers' , 'Total_Paid'));
    }
}
