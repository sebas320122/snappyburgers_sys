<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //be-nota: items de muestra
        //
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
            "Nombre"=> 'Hamburguesa sencilla',
            "Precio"=> 80
            ],
            [
            "Nombre"=> 'Hamburguesa con queso',
            "Precio"=> 100
            ],
            [
            "Nombre"=> 'Hamburguesa con pollo',
            "Precio"=> 100
            ],
            [
            "Nombre"=> 'Hamburguesa hawaiana',
            "Precio"=> 140
            ],
            [
            "Nombre"=> 'Hamburguesa especial',
            "Precio"=> 150
            ],
            [
            "Nombre"=> 'Hamburguesa bacon',
            "Precio"=> 150
            ],
            [
            "Nombre"=> 'Hamburguesa italiana',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Hamburguesa guacamole',
            "Precio"=> 155
            ],
            [
            "Nombre"=> 'Hamburguesa bbq',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Papas ch',
            "Precio"=> 60
            ],
            [
            "Nombre"=> 'Papas gd',
            "Precio"=> 90
            ],
            [
            "Nombre"=> 'Boneless ch',
            "Precio"=> 90
            ],
            [
            "Nombre"=> 'Boneless gd',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Agua 1/2l mineral',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Agua 1l mineral',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Agua 1/2l natural',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Agua 1l natural',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Refresco 1/2l naranja',
            "Precio"=> 130
            ],
            [
            "Nombre"=> 'Refresco 1l naranja',
            "Precio"=> 130
            ]
            
        ]);
        //
    }
}
