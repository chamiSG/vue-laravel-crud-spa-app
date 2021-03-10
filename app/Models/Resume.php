<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 
        'lastname', 
        'age', 
        'email', 
        'phone', 
        'address', 
        'dev_type', 
        'dev_description',
        'avatar', 
        'skill', 
        'work', 
        'edu', 
        'status',      
        'status_color',  
        'btn_status',     
        'btn_status_color',
    ]; 
}
