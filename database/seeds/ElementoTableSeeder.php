<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ElementoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elementos')->insert([
        	'grupo_id' => '1',
        	'nom_elemento' => 'Secretos de una dama',
        	'desc_elemento' => 'Novela de drama y suspenso. Escrita por Franklin Bullones',
        ]);

        DB::table('elementos')->insert([
        	'grupo_id' => '2',
        	'nom_elemento' => 'Secretos de una dama',
        	'desc_elemento' => 'Novela de drama y suspenso. Escrita por Franklin Bullones',
        ]);
    }
}
