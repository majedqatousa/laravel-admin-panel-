<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
    use HasFactory;

    protected $fillable =[
        'first_name', 
        'last_name',
        'email', 
        'phone',
        'company_id'

    ];
}
