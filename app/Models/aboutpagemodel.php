<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutpagemodel extends Model
{
    use HasFactory;
     protected $table = 'aboutpage';
     protected $fillable = [
        'image',
        'title',
        'des',
        'btnurl',
        'abouttitle1',
        'abouttitle2',
        'aboutimage'];
}
