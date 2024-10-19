<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $idCarrera
 * @property $nombreCarrera
 * @property $nombreCorto
 * @property $idDepto
 * @property $created_at
 * @property $updated_at
 *
 * @property Depto $depto
 * @property Alumno[] $alumnos
 * @property Reticula[] $reticulas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idCarrera', 'nombreCarrera', 'nombreCorto', 'idDepto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function depto()
    {
        return $this->belongsTo(\App\Models\Depto::class, 'idDepto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany(\App\Models\Alumno::class, 'id', 'idCarrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reticulas()
    {
        return $this->hasMany(\App\Models\Reticula::class, 'id', 'idCarrera');
    }
    
}
