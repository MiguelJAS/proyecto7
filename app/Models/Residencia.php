<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'telefono',
        'email',
        'Direccion',
        'Comunidad',
        'Localidad'
    ];

}
