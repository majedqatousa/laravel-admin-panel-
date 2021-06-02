<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;



class EmployeeController extends Controller
{
    public function show(){

        return view('employee.employee');

    }
    public function index(){
        $empty = 0 ;
        $employees = Employee::paginate(10);
        if(count($employees) ==0 ){
            $empty =1 ; 
        }
        return View('employee.employee', ['employees' => $employees , 'isEmpty'=>$empty]);
    }

    public function create(){
        $companeis = Company::all();
        return view('employee.add-employee' , ['companeis' => $companeis]);
    }

    public function onCreate(Request $request){
        // dd(request()->all());
        request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'companyId' => 'required',
            'phone' => 'required',
        ]);

    
        Employee::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'company_id' => $request->input('companyId'),
            'email' =>  $request->input('email'),
            'phone' =>  $request->input('phone'),
            
        ]);

        return redirect('/employees');
    }
    public function update(Employee $employee){
        $companeis = Company::all();

        return View('employee.edit-employee', ['employee' => $employee ,'companeis' => $companeis]);

    }
    public function onUpdate(Employee $employee, Request $request){
        // dd(request()->all());
        request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'companyId' => 'required',
            'phone' => 'required',
            
        ]);

        $employee->update([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'company_id' => $request->input('companyId'),
            'email' =>  $request->input('email'),
            'phone' =>  $request->input('phone'),
            
        ]);

        return redirect('/employees');

    }
    public function delete($employee){
        $data = Employee::find($employee);
        $data->delete();
        return redirect('/employees');


    }
    public function onDelete(Employee $company){

        $company->delete();

        return redirect('/companies');
    }
}
