<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sites extends Model
{
    //use HasFactory;

    protected $fillable=[

        'id',
        'name',
        'address_id',
        'status'

    ];

    public function address(){

        return $this->belongsTo(address::class, 'address_id');
    }
}
