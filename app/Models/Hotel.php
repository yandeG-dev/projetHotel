<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nomHotel',
        'addresse',
        'prixNuitee',
        'numero',
        'email',
        'devise',
        'cheminImage',
    ];
}
