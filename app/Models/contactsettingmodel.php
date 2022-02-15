<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactsettingmodel extends Model
{
    use HasFactory;
    protected $table = 'contactsetting';
     protected $fillable = [
        'mobile',
        'email',
         'location',
         'des',
         'fbpagelink',
         'maplocation'];
}
