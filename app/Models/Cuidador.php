<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    protected $table = 'cuidadores';
    protected $fillable = [
        'id',
        'user_id',
        'nombre',
        'apellidos',
        'dni',
        'telefono',
        'email',
        'Domicilio',
        'Comunidad'
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'contratos', 'cuidador_id', 'customer_id');
    }
}
