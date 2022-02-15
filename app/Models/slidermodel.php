<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slidermodel extends Model
{
    use HasFactory;

     protected $table = 'slidesetting';
     protected $fillable = [
        'slidetext1',
        'slidetext2',
        'slidetext3',
        'slidebtnnam',
        'slidebtnurl',
        'logo',
        'paylogo1',
        'paylogo2',
        'paylogo3',
        'paylogo4',
        'paylogo5',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
