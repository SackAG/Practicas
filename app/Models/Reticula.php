<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reticula
 *
 * @property $id
 * @property $idReticula
 * @property $descripcion
 * @property $fechaEnVigor
 * @property $idCarrera
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Materia[] $materias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reticula extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idReticula', 'descripcion', 'fechaEnVigor', 'idCarrera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class, 'idCarrera', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany(\App\Models\Materia::class, 'id', 'idReticula');
    }
    
}
