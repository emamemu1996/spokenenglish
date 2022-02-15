<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mydialogmodel extends Model
{
    use HasFactory;
     protected $table = 'mydialogue';
     protected $fillable = [
        'dialogid',
        'character',
         'dialogenglish',
         'dialogbangla',
         'type',
         'status'];
}
