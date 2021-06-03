<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChangeLangController extends Controller
{
    public function change($lang){
        if ($lang =='en'){
            session()->put('lang','en');
        }
        else if($lang == 'ar' ){
            session()->put('lang','ar');
        }
        return redirect('/'.$lang.'/dashboard');
    }
}
