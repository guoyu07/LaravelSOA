<?php

use Illuminate\Database\Seeder;

class CreateUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'first_name'   => 'Esvin',
        	'last_name'    => 'Gonzalez',
        	'email'        => 'esvin@mail.com',
        	'password'     => bcrypt('123'),
        ]);
        DB::table('users')->insert([
        	'first_name'   => 'Sarina',
        	'last_name'    => 'Bolaños',
        	'email'        => 'aniras@mail.com',
        	'password'     => bcrypt('123'),
        ]);
        DB::table('users')->insert([
        	'first_name'   => 'Karina',
        	'last_name'    => 'Castillo',
        	'email'        => 'karina@mail.com',
        	'password'     => bcrypt('123'),
        ]); 
    }
}
