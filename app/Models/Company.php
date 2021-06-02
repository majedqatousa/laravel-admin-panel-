<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Company extends Model
{
    public function employee() {
        return $this->hasMany('App\Models\Employee');
    }
    use HasFactory;

    protected $fillable =[
        'name', 
        'email', 
        'website',
        'logo'

    ];

    public function sendEmail(){
       
    }
}
