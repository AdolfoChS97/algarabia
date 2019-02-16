<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
        	'cod_producto' => '#4642623',
        	'nom_grupo' => 'Libros digitales',
            'precioDolar' => 2.8,
        	'cant_pro' => 1000000,	
        ]);

        DB::table('grupos')->insert([
        	'cod_producto' => '#4758484',
        	'nom_grupo' => 'Libros impresos',
        	'precioDolar' => 12,
        	'cant_pro' => 500,	
        ]);
    }
}
