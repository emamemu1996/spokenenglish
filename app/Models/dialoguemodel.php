<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dialoguemodel extends Model
{
    use HasFactory;
    protected $table = 'dialogue';
     protected $fillable = [
        'dialoguename',
        'characterone',
         'charactertwo',
         'priority',
         'type',
         'status'];
}
