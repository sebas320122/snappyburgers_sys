<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegistrosMuestraSeeder extends Seeder
{
    /**
     * Datos muestra para demostrar funcionamiento
     * de vista Ingresos.
     * Elimine los  diagonales y astericos pare cargar los datos muestra
     */
    public function run(): void
    {
        /* 
            // ordenes de muestra
            DB::table('ordenes')->insert([
                [
                    "Total"=> 400,
                    "Mesa"=> 1,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Total"=> 300,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Total"=> 1000,
                    "Mesa"=> 20,
                    "Estado"=> 'Cancelar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Total"=> 300,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Total"=> 400,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-02 22:04:51'
                ],
                [
                    "Total"=> 300,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-03 22:04:51'
                ],
                [
                    "Total"=> 800,
                    "Mesa"=> 2,
                    "Estado"=> 'Cancelar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-08 22:04:51'
                ],
                [
                    "Total"=> 140,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-08 22:04:51'
                ],
                [
                    "Total"=> 640,
                    "Mesa"=> 2,
                    "Estado"=> 'Confirmar',
                    "Empleado_creo"=> "Empleado",
                    "Empleado_actualizo"=> 'Empleado',
                    "created_at"=> '2024-04-08 22:04:51'
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
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Proveedor"=> 'lala',
                    "Producto"=> 'queso manchego',
                    "Cantidad"=> 10,
                    "Costo"=> 200,
                    "Estado"=> 'Entregada',
                    "Fecha_estimada"=> '2024-05-30 07:04:51',
                    "created_at"=> '2024-04-01 22:04:51'
                ],
                [
                    "Proveedor"=> 'bimbo',
                    "Producto"=> 'pan',
                    "Cantidad"=> 10,
                    "Costo"=> 1000,
                    "Estado"=> 'Cancelada',
                    "Fecha_estimada"=> '2024-05-30 07:04:51',
                    "created_at"=> '2024-04-01 22:04:51'
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
        */ 
    }
}
