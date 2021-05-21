<?php

namespace App\Models;

use App\Models\sites;
use App\Models\persons;
use App\Models\instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class courses extends Model
{
    protected $fillable=[
        'id',
        'start_date',
        'finish_date',
        'time',
        'type_course',
        'instructor_id',
        'site_id'
    ];

    public function instructor(){

        return $this->belongsTo(persons::class, 'instructor_id', 'id');

    }

    public function sitios(){
        return $this->belongsTo(sites::class, 'site_id', 'id');
    }

}
