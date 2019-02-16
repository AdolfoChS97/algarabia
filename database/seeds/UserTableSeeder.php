<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Adolfo',
        	'email' => 'adolfo1997a@gmail.com',
        	'password' => bcrypt('a121997a'),
        ]);
    }
}
