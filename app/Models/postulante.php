<?php

namespace App\Models;

use App\Models\address;
use App\Models\persons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class postulante extends Model
{
   protected $fillable=[
       'id',
       'person_id',
       'address_id',
       'cursos_id',
       'tipo_licencia'
   ];

   public function person(){

        return $this->belongsTo(persons::class, 'person_id');
   }
   public function direccion(){
       return $this->belongsTo(address::class, 'address_id' );
   }



}
