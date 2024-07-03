<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'laboratorio_id', 'fecha_solicitud', 'fecha_inicio', 'fecha_fin', 'observaciones'];

    protected $dates = ['fecha_solicitud', 'fecha_inicio', 'fecha_fin'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorio_id');
    }
}
