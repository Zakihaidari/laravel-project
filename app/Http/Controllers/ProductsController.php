<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Computer;
use App\Watch;
use App\Shoe;
use App\Shirt;
use App\Trouser;
use App\Coat;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function Mobile_index() {
        $Total_Money = 0;
        
        $mobile = Mobile::all();

        $categories = Mobile::count();
        
        $total_amount = DB::table('mobiles')->sum('amount');

        foreach ($mobile as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
        
        return view('Products.index' , [
            'BigTableKey' => $mobile,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }

    public function Computer_index() {
        $Total_Money = 0;
        
        $computer = Computer::all();

        $categories = Computer::count();
        
        $total_amount = DB::table('computers')->sum('amount');

        foreach ($computer as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
    
        return view('Products.index' , [
            'BigTableKey' => $computer,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }

    public function Watch_index() {
        $Total_Money = 0;
        
        $watch = Watch::all();

        $categories = Watch::count();
        
        $total_amount = DB::table('watches')->sum('amount');

        foreach ($watch as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
    
        return view('Products.index' , [
            'BigTableKey' => $watch,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }

    public function Shoe_index() {
        $Total_Money = 0;
        
        $shoe = Shoe::all();

        $categories = Shoe::count();
        
        $total_amount = DB::table('shoes')->sum('amount');

        foreach ($shoe as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
        
        return view('Products.index' , [
            'BigTableKey' => $shoe,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }

    public function Shirt_index() {
        $Total_Money = 0;
        
        $shirt = Shirt::all();

        $categories = Shirt::count();
        
        $total_amount = DB::table('shirts')->sum('amount');

        foreach ($shirt as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
    
        return view('Products.index' , [
            'BigTableKey' => $shirt,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }

    public function Trouser_index() {
        $Total_Money = 0;
        
        $trouser = Trouser::all();

        $categories = Trouser::count();
        
        $total_amount = DB::table('trousers')->sum('amount');

        foreach ($trouser as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
    
        return view('Products.index' , [
            'BigTableKey' => $trouser,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }


    public function Coat_index() {
        $Total_Money = 0;
        
        $coat = Coat::all();

        $categories = Coat::count();
        
        $total_amount = DB::table('coats')->sum('amount');

        foreach ($coat as $money) {
            $totalmoneyofeachrow = (($money->amount) * ($money->sale_price));
            $Total_Money = $Total_Money + $totalmoneyofeachrow;
        }
    
        return view('Products.index' , [
            'BigTableKey' => $coat,
            'Total_Categories' => $categories,
            'Total_Amount' => $total_amount,
            'Total_Money' => $Total_Money,
        ]);
    }


    public function create() {

        $product = new Mobile();
        $product = new Computer();
        $product = new Watch();
        $product = new Shoe();
        $product = new Shirt();
        $product = new Trouser();
        $product = new Coat();

        return view('Products.create' , compact('product'));
    }



    public function store() {
         
        if (request('category') == 'Mobile') {
          $product = new Mobile(); 
        } else if (request('category') == 'Computer') {
          $product = new Computer();    
        } else if (request('category') == 'Watch') {
          $product = new Watch();    
        } else if (request('category') == 'Shoe') {
          $product = new Shoe();    
        } else if (request('category') == 'Shirt') {
          $product = new Shirt();    
        } else if (request('category') == 'Trouser') {
          $product = new Trouser();    
        } else if (request('category') == 'Coat') {
          $product = new Coat();    
        }
 
        $product->id = request('id');
        $product->name = request('name');
        $product->category = request('category');
        $product->amount = request('amount'); 
        $product->sale_price = request('price');
        $product->size = request('size');
        $product->store_date = request('date');
        $product->alert = request('alert');
        $product->save();        
        
        //session()->flash('message' , 'Data Has Inserted Successfully !!');
        
        return back()->with('message' , 'Data Has Inserted Successfully !!');
    }


    public function show($product , $category) {

        if ($category == 'Mobile') {
           $product = Mobile::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Computer') {
           $product = Computer::where('id' , $product)->firstOrFail();
        }
        else if ($category == 'Watch') {
           $product = Watch::where('id' , $product)->firstOrFail();
        }
        else if ($category == 'Shoe') {
           $product = Shoe::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Shirt') {
           $product = Shirt::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Trouser') {
           $product = Trouser::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Coat') {
           $product = Coat::where('id' , $product)->firstOrFail(); 
        }

        return view('Products.show' , compact('product'));

    }


    public function edit($product , $category) {

        if ($category == 'Mobile') {
           $product = Mobile::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Computer') {
           $product = Computer::where('id' , $product)->firstOrFail();
        }
        else if ($category == 'Watch') {
           $product = Watch::where('id' , $product)->firstOrFail();
        }
        else if ($category == 'Shoe') {
           $product = Shoe::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Shirt') {
           $product = Shirt::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Trouser') {
           $product = Trouser::where('id' , $product)->firstOrFail(); 
        }
        else if ($category == 'Coat') {
           $product = Coat::where('id' , $product)->firstOrFail(); 
        }

        return view('Products.edit' , compact('product'));

    }



    public function update($product) {
        

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

        $category = request('category');
        $name = request('name');

        $prod->where('id' , $product)->update(array(
          'id' => $product,
          'name' => request('name'),
          'category' => request('category'),
          'amount' => request('amount'), 
          'sale_price' => request('price'),
          'size' => request('size'),
          'store_date' => request('date'),
          'alert' => request('alert'),

        ));
        
        return redirect('Products/' . $product . '/' . $category)->with('message' , $name . ' Has Updated Successfully!!');
   
    }


    public function destroy($product , $category) {

        if ($category == 'Mobile') {
           $route = 'mobiles_table'; 
           $prod = new Mobile();
           $array = Mobile::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete();  
        }
        else if ($category == 'Computer') {
           $route = 'computers_table';
           $prod = new Computer();
           $array = Computer::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete();
        }
        else if ($category == 'Watch') {
           $route = 'watches_table';
           $prod = new Watch();
           $array = Watch::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete();
        }
        else if ($category == 'Shoe') {
           $route = 'shoes_table';
           $prod = new Shoe();
           $array = Shoe::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete();
        }
        else if ($category == 'Shirt') {
           $route = 'shirts_table';
           $prod = new Shirt();
           $array = Shirt::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete();
        }
        else if ($category == 'Trouser') {
           $route = 'trousers_table';
           $prod = new Trouser();
           $array = Trouser::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete(); 
        }
        else if ($category == 'Coat') {
           $route = 'coats_table';
           $prod = new Coat();
           $array = Coat::where('id' , $product)->pluck('name');
           $name = $array->first();
           $prod->where('id' , $product)->delete(); 
        }

        return redirect('/'.$route)->with('message' , 'Success: ' . $name . ' Has Deleted Successfully!!');

    }




    public function search () {


        if (request('category') == 'Mobile') {

            $searchTerm = request('search');

            $BigTableKey = Mobile::all()->where('name' , $searchTerm);

            $Total_Categories = Mobile::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));

            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));
               
          }
          
        else if (request('category') == 'Computer') {

            $searchTerm = request('search');

            $BigTableKey = Computer::all()->where('name' , $searchTerm);

            $Total_Categories = Computer::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));

          } 
          
        else if (request('category') == 'Watch') {

            $searchTerm = request('search');

            $BigTableKey = Watch::all()->where('name' , $searchTerm);

            $Total_Categories = Watch::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));

        }
         
        else if (request('category') == 'Shoe') {

            $searchTerm = request('search');

            $BigTableKey = Shoe::all()->where('name' , $searchTerm);

            $Total_Categories = Shoe::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));  

        }
         
        else if (request('category') == 'Shirt') {

            $searchTerm = request('search');

            $BigTableKey = Shirt::all()->where('name' , $searchTerm);

            $Total_Categories = Shirt::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));

        }
         
        else if (request('category') == 'Trouser') {

            $searchTerm = request('search');

            $BigTableKey = Trouser::all()->where('name' , $searchTerm);

            $Total_Categories = Trouser::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));

        }
        
        else if (request('category') == 'Coat') {

            $searchTerm = request('search');

            $BigTableKey = Coat::all()->where('name' , $searchTerm);

            $Total_Categories = Coat::all()->where('name' , $searchTerm)->count();
        
            $Total_Amount = $BigTableKey->where('name' , $searchTerm)->sum('amount');
            
            $Total_Money = ($BigTableKey->sum('amount')) * ($BigTableKey->sum('sale_price'));
    
            return view('Products.index' , compact('BigTableKey' , 'Total_Categories' , 'Total_Amount' , 'Total_Money'));   
        }

    }


}
