<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable=[

        'neighborhood',
        'street',
        'nro_house',
        'nro_dpto',
        'nfo_add'

    ];
}
