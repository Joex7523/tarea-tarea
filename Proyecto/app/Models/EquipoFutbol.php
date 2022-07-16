<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipoFutbol extends Model
{
    use HasFactory;
    protected $table='animals';
    protected $fillabel=[
        'Nombre',
        'ciudadOrigen',
        'ligaPertenece',
        'correo',
        'web',
        'telefono'


       
       
    ];
}
