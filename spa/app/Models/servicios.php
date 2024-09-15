<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_servicio',
        'descripcion',
        'precio',
        'imagen',
    ];

    public function turnos(){
        return $this->hasMany(Turno::class,'id_servicio');
    }
}
