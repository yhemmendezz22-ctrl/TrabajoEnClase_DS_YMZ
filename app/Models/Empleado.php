<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'correo',
        'cargo',
        'fecha_contratacion',
        'estado'
    ];


    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
