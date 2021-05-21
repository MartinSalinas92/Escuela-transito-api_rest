<?php

namespace App\Models;

use App\Models\postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class persons extends Model
{
    //use HasFactory;

    protected $fillable=[
        'id',
        'name',
        'last_name',
        'dni',
        'date_birth',
        'number_tel'
    ];



}
