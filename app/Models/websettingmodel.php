<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class websettingmodel extends Model
{
    use HasFactory;
       protected $table = 'websitesetting';
     protected $fillable = [
        'webtitle',
        'keyword',
         'des',
         'footerdes',
         'image',
         'exduration',
         'extitle'
      ];
}
