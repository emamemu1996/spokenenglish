<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resumemodel extends Model
{
    use HasFactory;
    protected $table = 'resume';
     protected $fillable = [
        'exname',
        'institute',
         'duration',
         'type'];
}
