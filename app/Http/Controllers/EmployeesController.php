<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index() {
         
       $BigTableKey = Employee::all();

       $Total_Employees = Employee::count();

       $Total_Salary = DB::table('employees')->sum('salary');

       return view('Employees.index' , compact('BigTableKey' , 'Total_Employees' , 'Total_Salary'));
    }


    public function create() {

       return view('Employees.create'); 
    }



    public function store() {

       $employee = new Employee();

       $employee->id = request('id');
       $employee->first_name = request('firstname');
       $employee->last_name = request('lastname');
       $employee->email = request('email');
       $employee->gender = request('gender');
       $employee->phone_number = request('phone');
       $employee->salary = request('salary');
       $employee->register_date = request('date');
       $employee->save();

       $name = request('firstname');

       return redirect('Employees/create')-with('message' , 'Success: ' . $name . ' Inserted Successfully!!');
    }



    public function search() {
              
        $searchTerm = request('search');

        $BigTableKey = Employee::all()->where('first_name' , $searchTerm);

        $Total_Employees = Employee::all()->where('first_name' , $searchTerm)->count();

        $Total_Salary = Employee::all()->where('first_name' , $searchTerm)->sum('salary');

        return view('Employees.index' , compact('BigTableKey' , 'Total_Employees' , 'Total_Salary')); 
    }

}
