<?php

use App\Http\Controllers\ChangeLangController;
use App\Notifications\companyCreat;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;

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


    Route::get('/', function () {
        // if (! in_array($locale, ['en', 'ar'])) {
        //     abort(400);
        // }
    
        // App::setLocale($locale);
          return view('welcome');
      });
      Route::get('/{lang}',[ChangeLangController::class,'change']);
      
      Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
          return view('dashboard');
      })->name('dashboard');

      Route::group(['prefix'=> '/{lang}' , 'middleware' => ["auth:sanctum", 'verified']], function(){
          //Company Routes
          
           Route::get('dashboard', 'App\Http\Controllers\CompanyController@dashboardInfo')->name('dashborad.index');
          Route::get('companies', 'App\Http\Controllers\CompanyController@index');
          Route::get('add-company', 'App\Http\Controllers\CompanyController@create');
          Route::post('add-company', 'App\Http\Controllers\CompanyController@onCreate');
          Route::get('company-details/delete-company/{company}', 'App\Http\Controllers\CompanyController@delete');
          Route::get('company-details/{company}', 'App\Http\Controllers\CompanyController@show');
          Route::get('company-details/edit-company/{company}', 'App\Http\Controllers\CompanyController@update');
          Route::put('edit-company/{company}', 'App\Http\Controllers\CompanyController@onUpdate');
          
          //Employee Routes 
          Route::get('employees', 'App\Http\Controllers\EmployeeController@index');
          Route::get('add-employee', 'App\Http\Controllers\EmployeeController@create');
          Route::post('add-employee', 'App\Http\Controllers\EmployeeController@onCreate');
          Route::get('delete-employee/{employee}', 'App\Http\Controllers\EmployeeController@delete');
          Route::get('edit-employee/{employee}', 'App\Http\Controllers\EmployeeController@update');
          Route::put('edit-employee/{employee}', 'App\Http\Controllers\EmployeeController@onUpdate');
      });

