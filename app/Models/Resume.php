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
        'skill_name', 
        'skill_year', 
        'p_title', 
        'p_client', 
        'p_timeline', 
        'p_description', 
        'e_title', 
        'e_client', 
        'e_timeline', 
        'e_description',  
        'status',  
    ]; 
}
