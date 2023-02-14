<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    protected $table = 'cuidadores';
    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'dni',
        'telefono',
        'email',
        'Domicilio',
        'Comunidad'
    ];

    use HasFactory;
}
