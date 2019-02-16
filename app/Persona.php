<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
    	'user_id',
    	'nombre',
    	'apellido',
    	'dni',
    	'direccion',
    	'tlf_contacto',
    	'tlf_secundario',
    	'deleted',
    	'created_at',
    	'updated_at',
    ];

    public function User(){
    	return $this->belongsTo(User::class);
    }
}
