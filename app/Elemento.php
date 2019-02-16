<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
   protected $table = 'elementos';

   protected $fillable [
   		'grupo_id',
   		'nom_elemento',
   		'desc_elemento',
   		'created_at',
    	'updated_at',
   ];

   public function grupo(){
   		return $this->belongsTo(Grupo::class);
   }
}
