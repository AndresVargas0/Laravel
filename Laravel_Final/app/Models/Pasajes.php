<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajes extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'email',
        'phone',
        'destino',
        'ubication',
        'price',
    ];
}
