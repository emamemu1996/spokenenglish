<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactmodel extends Model
{
    use HasFactory;
     protected $table = 'contactus';
     protected $fillable = [
        'name',
        'sender',
        'subject',
        'website',
        'message'
    ];

    
}
