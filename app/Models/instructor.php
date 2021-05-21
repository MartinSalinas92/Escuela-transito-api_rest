<?php

namespace App\Models;

use App\Models\persons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class instructor extends Model
{
    //use HasFactory;
    protected $fillable=[
        'person_id',
        'status'
    ];

    public function person(){
        return $this->belongsTo(persons::class, 'person_id');
    }



}
