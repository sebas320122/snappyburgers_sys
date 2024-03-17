<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobros extends Model
{
    //nombre de tabla
    protected $table = 'reportes';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Orden_id',
    'Item',
    'Cantidad',
    'Precio',
    'Mesa'
    ];
}
