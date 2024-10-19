<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $noCtrl
 * @property $nombreAlumno
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $sexo
 * @property $idCarrera
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['noCtrl', 'nombreAlumno', 'apellidoPaterno', 'apellidoMaterno', 'sexo', 'idCarrera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class, 'idCarrera', 'id');
    }
    
}
