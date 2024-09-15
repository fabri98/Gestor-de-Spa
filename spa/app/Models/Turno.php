<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_servicio',
        'fecha_turno',
        'hora_turno',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function servicio(){
        return $this->belongsTo(servicios::class,'id_servicio');
    }
}
