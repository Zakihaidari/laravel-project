<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;

class BranchesController extends Controller
{
    public function index() {
         
       $BigTableKey = Branch::all();

       $Total_Branches = Branch::count();

       return view('Branches.index' , compact('BigTableKey' , 'Total_Branches'));
    }


    public function create() {

        return view('Branches.create');
    }

    public function store() {

       $branch = new Branch();

       $branch->branch_number = request('number');
       $branch->branch_name = request('name');
       $branch->location = request('location');
       $branch->manager = request('manager');
       $branch->manager_phone = request('phone');
       $branch->save();

       $branch_name = request('name');

       return redirect('Branches/create')->with('message' , 'Success:' . $branch_name . ' Branch Has Added Successfully!!');
    }

    public function search() {
              
        $searchTerm = request('search');

        $BigTableKey = Branch::all()->where('branch_name' , $searchTerm);

        $Total_Branches = Branch::all()->where('branch_name' , $searchTerm)->count();

        return view('Branches.index' , compact('BigTableKey' , 'Total_Branches')); 
    }
}
