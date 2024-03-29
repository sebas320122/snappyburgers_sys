<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobros extends Model
{
    //nombre de tabla
    protected $table = 'cobros';

    use HasFactory;

    //Campos que se pueden llenar masivamente
    protected $fillable = 
    [
    'Orden_id',
    'Item',
    'Cantidad',
    'Precio',
    'Mesa',
    'Estado'
    ];

    public function orden()
    {
        return $this->belongsTo(Ordenes::class);
    }
}
