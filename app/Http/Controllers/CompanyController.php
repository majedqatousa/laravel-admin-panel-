<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use App\Notifications\companyCreat;
use Illuminate\Notifications\Notification;

class CompanyController extends Controller
{
    //
    public function dashboardInfo ()
    {
        $companeis = Company::all();
        $numOfCompaneis = count($companeis);
        $emplolyees = Employee::all();
        $numOfEmployees = count($emplolyees);
        
        return view('dashboard' , ['numOfCompaneis'=>$numOfCompaneis , 'numOfEmployees'=>$numOfEmployees]);
    }
    public function show($lang , $company){
      
        $data = Company::find($company);
        return view('company.company-details' ,['company'=>$data]);
    }
    public function index(){
        $empty = 0; 
        $companies = Company::paginate(10);
        if(count($companies)==0){
            $empty = 1; 
        }
        return View('company.company', ['companies' => $companies , 'isEmpty' => $empty]);

    }
    public function create(){
        return view('company.add-company');
    }
    public function onCreate(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5048',
            'website' => 'required',
            
        ]);

        $newLogoName = time() . '_' . $request->name . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $newLogoName);

        Company::create([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'logo' =>  $newLogoName, 
            'website' =>  $request->input('website'),
            
        ]);
        $user =User::first();
        $user->notify(new companyCreat);

        return redirect('/'.app()->getLocale().'/companies');
    }
    public function update($lang, Company $company){

        return View('company.edit-company', ['company' => $company]);

    }
    public function onUpdate($lang, Company $company, Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required|mimes:jpg,png,jpeg|max:5048',
            'website' => 'required',
            
        ]);

        $newLogoName = time() . '_' . $request->name . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $newLogoName);

        $company->update([
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'website'=> $request->input('website'),
            'logo' => $newLogoName,
            
        ]);

        return redirect('/'.app()->getLocale().'/companies');

    }
    public function delete($lang , $company){
        $data = Company::find($company);
        $data->delete();
        return redirect('/'.app()->getLocale().'/companies');


    }
    public function onDelete($lang ,Company $company){

        $company->delete();

        return redirect('/'.app()->getLocale().'/companies');
    }
}
