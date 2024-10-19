<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Depto
 *
 * @property $id
 * @property $idDepto
 * @property $nombreDepto
 * @property $nombreMediano
 * @property $nombreCorto
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera[] $carreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Depto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idDepto', 'nombreDepto', 'nombreMediano', 'nombreCorto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras()
    {
        return $this->hasMany(\App\Models\Carrera::class, 'id', 'idDepto');
    }
    
}
