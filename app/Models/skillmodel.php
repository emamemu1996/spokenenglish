<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skillmodel extends Model
{
    use HasFactory;
     protected $table = 'skill';
     protected $fillable = [
        'skillname',
        'parcen',
         'color',
         'section'];
}
