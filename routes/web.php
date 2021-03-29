<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Menu Part Routes*/
Route::view('/', 'welcome');
Route::view('/category', 'Menu.Category')->middleware('auth');
Route::view('/customerlist', 'Menu.Customer-List')->middleware('auth');
Route::view('/branchlist', 'Menu.Branch-List')->middleware('auth');
Route::view('/saleslist', 'Menu.Sales-List')->middleware('auth');
Route::view('/employeelist', 'Menu.Employee-List')->middleware('auth');

/* Category Part Routes*/ 
Route::get('mobiles_table', 'ProductsController@Mobile_index');
Route::get('computers_table', 'ProductsController@Computer_index');
Route::get('watches_table', 'ProductsController@Watch_index');
Route::get('shoes_table', 'ProductsController@Shoe_index');
Route::get('shirts_table', 'ProductsController@Shirt_index');
Route::get('trousers_table', 'ProductsController@Trouser_index');
Route::get('coats_table', 'ProductsController@Coat_index');

Route::get('Products/create' , 'ProductsController@create');
Route::post('Products' , 'ProductsController@store');
Route::get('Products/{product}/{category}', 'ProductsController@show');
Route::get('Products/{product}/{category}/edit', 'ProductsController@edit');
Route::patch('Products/{product}', 'ProductsController@update');
Route::delete('Products/{product}/{category}', 'ProductsController@destroy');
Route::post('Products/search' , 'ProductsController@search');

/* Customer List Part Routes*/ 
Route::get('Customers', 'CustomersController@index');
Route::post('Customers/search', 'CustomersController@search');

/* Sales List Part Routes*/
Route::get('Sales/create', 'SalesController@create');
Route::get('Sales', 'SalesController@index');
Route::post('Sales' , 'SalesController@store');
Route::post('Sales/search' , 'SalesController@search');

/* Branch List Part Routes*/
Route::get('Branches' , 'BranchesController@index');
Route::get('Branches/create' , 'BranchesController@create');
Route::post('Branches' , 'BranchesController@store');
Route::post('Branches/search' , 'BranchesController@search');

/* Employee List Part Routes*/
Route::get('Employees' , 'EmployeesController@index');
Route::get('Employees/create' , 'EmployeesController@create');
Route::post('Employees' , 'EmployeesController@store');
Route::post('Employees/search' , 'EmployeesController@search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


