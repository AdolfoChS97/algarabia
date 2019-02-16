<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
    	'cod_producto',
    	'nom_grupo',
    	'precio',
    	'cant_pro',
    	'created_at',
    	'updated_at',
    ];

    public function elemento(){
    	return $this->belongsTo(Elemento::class);
    }
}
