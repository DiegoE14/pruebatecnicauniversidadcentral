<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'identificación', 'tipo_usuario', 'dependencia'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
