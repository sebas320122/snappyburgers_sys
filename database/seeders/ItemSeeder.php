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
        // items de muestra
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
            "Nombre"=> 'Hamburguesa sencilla',
            "Precio"=> 80,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 2 pdz de pepinillos,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa con queso',
            "Precio"=> 100,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 2 pdz de pepinillos,1 porcion de mayonesa, 1 pieza de queso americano'
            ],
            [
            "Nombre"=> 'Hamburguesa con pollo',
            "Precio"=> 100,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de pollo, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 2 pdz de pepinillos,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa hawaiana',
            "Precio"=> 140,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 1 pdz de piña,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa especial',
            "Precio"=> 150,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 1 porcion de bbq,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa bacon',
            "Precio"=> 150,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 3 pdz de tocino,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa italiana',
            "Precio"=> 130,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 1 pieza queso manchego,1 pdz tomate, 1 pizca de sal, 3 pdz de peperoni,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa guacamole',
            "Precio"=> 155,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 1 porcion de guacamole,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Hamburguesa bbq',
            "Precio"=> 130,
            "Categoria"=> 'Hamburguesa',
            "Productos"=> '2 panes, 1 carne de res, 2 pdz de lechuga,1 pdz tomate, 1 pizca de sal, 1 porcion de bbq,1 porcion de mayonesa'
            ],
            [
            "Nombre"=> 'Papas ch',
            "Precio"=> 60,
            "Categoria"=> 'Papas',
            "Productos"=> '1 porcion de papas'
            ],
            [
            "Nombre"=> 'Papas gd',
            "Precio"=> 90,
            "Categoria"=> 'Papas',
            "Productos"=> '2 porcion de papas'
            ],
            [
            "Nombre"=> 'Boneless ch',
            "Precio"=> 90,
            "Categoria"=> 'Boneless',
            "Productos"=> '1 porcion de boneless'
            ],
            [
            "Nombre"=> 'Boneless gd',
            "Precio"=> 130,
            "Categoria"=> 'Boneless',
            "Productos"=> '2 porcion de boneless'
            ],
            [
            "Nombre"=> 'Agua 1/2l mineral',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Agua 1/2l mineral'
            ],
            [
            "Nombre"=> 'Agua 1l mineral',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Agua 1l mineral'
            ],
            [
            "Nombre"=> 'Agua 1/2l natural',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Agua 1/2l natural'
            ],
            [
            "Nombre"=> 'Agua 1l natural',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Agua 1l natural'
            ],
            [
            "Nombre"=> 'Refresco 1/2l naranja',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Refresco 1/2l naranja'
            ],
            [
            "Nombre"=> 'Refresco 1l naranja',
            "Precio"=> 130,
            "Categoria"=> 'Bebidas',
            "Productos"=> '1 Refresco 1l naranja'
            ]
            
        ]);

        // ordenes de muestra
        DB::table('ordenes')->insert([
            [
                "Total"=> 400,
                "Mesa"=> 1,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Total"=> 300,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Total"=> 1000,
                "Mesa"=> 20,
                "Estado"=> 'Cancelar',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Total"=> 300,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-04-01 22:04:51'
            ],
            [
                "Total"=> 400,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-04-02 22:04:51'
            ],
            [
                "Total"=> 300,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-04-03 22:04:51'
            ],
            [
                "Total"=> 800,
                "Mesa"=> 2,
                "Estado"=> 'Cancelar',
                "created_at"=> '2024-04-07 22:04:51'
            ],
            [
                "Total"=> 140,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-04-07 22:04:51'
            ],
            [
                "Total"=> 640,
                "Mesa"=> 2,
                "Estado"=> 'Confirmar',
                "created_at"=> '2024-04-07 22:04:51'
            ]
        ]);

        // proveedores de muestra
        DB::table('proveedores')->insert([
            [
                "Proveedor"=> 'lala',
                "Producto"=> 'queso americano',
                "Cantidad"=> 10,
                "Costo"=> 100,
                "Estado"=> 'En curso',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Proveedor"=> 'lala',
                "Producto"=> 'queso manchego',
                "Cantidad"=> 10,
                "Costo"=> 200,
                "Estado"=> 'Entregada',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Proveedor"=> 'bimbo',
                "Producto"=> 'pan',
                "Cantidad"=> 10,
                "Costo"=> 1000,
                "Estado"=> 'Cancelada',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-03-31 22:04:51'
            ],
            [
                "Proveedor"=> 'bimbo',
                "Producto"=> 'pan',
                "Cantidad"=> 10,
                "Costo"=> 100,
                "Estado"=> 'En curso',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-01 22:04:51'
            ],
            [
                "Proveedor"=> 'san juan',
                "Producto"=> 'tomate',
                "Cantidad"=> 5,
                "Costo"=> 555,
                "Estado"=> 'Entregada',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-02 22:04:51'
            ],
            [
                "Proveedor"=> 'san juan',
                "Producto"=> 'lechuga',
                "Cantidad"=> 5,
                "Costo"=> 100,
                "Estado"=> 'En curso',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-03 22:04:51'
            ],
            [
                "Proveedor"=> 'san juan',
                "Producto"=> 'pepinillos',
                "Cantidad"=> 53,
                "Costo"=> 888,
                "Estado"=> 'Cancelada',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-07 22:04:51'
            ],
            [
                "Proveedor"=> 'san juan',
                "Producto"=> 'pepinillos',
                "Cantidad"=> 15,
                "Costo"=> 88,
                "Estado"=> 'En curso',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-07 22:04:51'
            ],
            [
                "Proveedor"=> 'MarcosMx',
                "Producto"=> 'carne',
                "Cantidad"=> 130,
                "Costo"=> 400,
                "Estado"=> 'Entregada',
                "Fecha_estimada"=> '2024-05-30 07:04:51',
                "created_at"=> '2024-04-07 22:04:51'
            ]
        ]);

    }
}
