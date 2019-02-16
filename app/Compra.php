<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Compra extends Model
{
   protected $table = 'compras';

   protected $fillable = [
   		'elemento_id',
   		'persona_id',
   		'cant_total_productos',
   		'total',
   		'entrega',
   		'created_at',
    	'updated_at',
   ];

   public function elemento(){
   		return $this->belongsTo(Elemento::class);
   }

   public function persona(){
   		return $this->belongsTo(Persona::class);
   }
}
