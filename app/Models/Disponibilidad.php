<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    //nombre de tabla
    protected $table = 'disponibilidad';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Producto',
    'Existencia',
    'Capacidad',
    'Porcentaje'
    ];
}
