<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cuidador_id',
        'diurna',
        'nocturna',
        'festivos',
        'personalizada'
    ];

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id');
    }
}
