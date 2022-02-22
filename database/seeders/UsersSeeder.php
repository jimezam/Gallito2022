<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jorge I. Meza",
            'email' => "jimezam@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistentem@autonoma.edu.co",
            'password' => Hash::make('bola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Diseñador",
            'email' => "diseno@autonoma.edu.co",
            'password' => Hash::make('cola1234'),
        ]);
    }
}
