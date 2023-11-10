<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('patients')->insert(['nombre' => 'david', 'apellido1' => 'Martinez','apellido2' => '', 'email' => 'david@prueba.com']);
        DB::table('patients')->insert(['nombre' => 'david2','apellido1' => 'Martinez','apellido2' => '', 'email' => 'david@prueba.com']);
        DB::table('patients')->insert(['nombre' => 'david3','apellido1' => 'Martinez','apellido2' => '', 'email' => 'david@prueba.com']);
        DB::table('patients')->insert(['nombre' => 'david4','apellido1' => 'Martinez','apellido2' => '', 'email' => 'david@prueba.com']);
        DB::table('patients')->insert(['nombre' => 'david5','apellido1' => 'Martinez','apellido2' => '', 'email' => 'david@prueba.com']);
        
    }
}
