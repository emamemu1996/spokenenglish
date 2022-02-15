<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galarymodel extends Model
{
    use HasFactory;
     protected $table = 'galary';
     protected $fillable = [
          'title',
          'des',
         'image'];
}
