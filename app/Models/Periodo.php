<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $idPeriodo
 * @property $periodo
 * @property $desCorta
 * @property $fechaIni
 * @property $fechaFin
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idPeriodo', 'periodo', 'desCorta', 'fechaIni', 'fechaFin'];


}
