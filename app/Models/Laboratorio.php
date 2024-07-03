<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = ['nombre', 'capacidad'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
