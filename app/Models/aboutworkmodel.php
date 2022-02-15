<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutworkmodel extends Model
{
    use HasFactory;
     protected $table = 'aboutwork';
     protected $fillable = [
        'title',
        'workcount',
        'des'];
}
