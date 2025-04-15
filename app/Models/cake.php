<?php

namespace App\Models;

use Database\Database;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    public $timestamps = false;
    protected $table = 'cake';
    
    protected $fillable = [
        'name',
        'price'
    ];

    protected $casts = [
        'price' => 'float',
    ];
}
