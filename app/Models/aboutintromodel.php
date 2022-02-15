<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutintromodel extends Model
{
    use HasFactory;
     protected $table = 'aboutintro';
     protected $fillable = [
        'title1',
        'title2'];
}
