<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordertable extends Model
{
    use HasFactory;
     protected $table = 'ordertable';
     protected $fillable = [
          'planname',
          'planprice',
          'planservice1',
          'planservice2',
          'planservice3',
          'planservice4',
          'planservice5'];
}
