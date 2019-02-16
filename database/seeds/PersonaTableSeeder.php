<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
        	'user_id' => '1',
        	'nombre' => 'Adolfo',
        	'apellido' => 'Chafardett',
        	'dni' => 26683640,
        	'direccion' => 'Propatria',
            'tipo_persona' => 'Administrador',
        	'tlf_contacto' => '04165717852',
        	'tlf_secundario' => '02128717471',
       	]);
    }
}
