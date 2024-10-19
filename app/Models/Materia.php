<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $idMateria
 * @property $nombreMateria
 * @property $nivel
 * @property $nombreMediano
 * @property $nombreCorto
 * @property $modalidad
 * @property $idReticula
 * @property $created_at
 * @property $updated_at
 *
 * @property Reticula $reticula
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idMateria', 'nombreMateria', 'nivel', 'nombreMediano', 'nombreCorto', 'modalidad', 'idReticula'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reticula()
    {
        return $this->belongsTo(\App\Models\Reticula::class, 'idReticula', 'id');
    }
    
}
