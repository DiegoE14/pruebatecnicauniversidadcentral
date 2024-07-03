<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = ['usuario_id', 'laboratorio_id', 'fecha_solicitud', 'fecha_inicio', 'fecha_fin', 'observaciones'];

    // Campos de fecha que deben ser tratados como objetos Carbon
    protected $dates = ['fecha_solicitud', 'fecha_inicio', 'fecha_fin'];

    /**
     * Relación muchos a uno con Usuario.
     * Una reserva pertenece a un usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    /**
     * Relación muchos a uno con Laboratorio.
     * Una reserva pertenece a un laboratorio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorio_id');
    }
}
