<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    //nombre de tabla
    protected $table = 'ordenes';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Total',
    'Mesa',
    'Estado',
    'Empleado_creo',
    'Empleado_actualizo'
    ];

    public function cobros()
    {
        return $this->hasMany(Cobros::class, 'Orden_id');
    }
}
