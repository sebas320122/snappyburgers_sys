<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EmpleadoSeeder extends Seeder
{
    /**
     * Crear usuario para administrador
     */
    public function run(): void
    {
        // Nota: Modificar datos una vez accedido al sistema
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                "nombre"=> 'Gerente local',
                "email"=> 'snappy@gmail.com',
                "password"=> Hash::make('snappy'),
                "rol"=> 'Gerente',
                "created_at"=> now()
            ]
        ]);
    }
}
