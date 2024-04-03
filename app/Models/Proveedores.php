<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //nombre de tabla
    protected $table = 'proveedores';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Proveedor',
    'Producto',
    'Cantidad',
    'Costo',
    'Estado',
    'Fecha_estimada',
    'Fecha_entrega'
    ];
}
