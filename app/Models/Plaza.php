<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plaza
 *
 * @property $id
 * @property $idPlaza
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plaza extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['idPlaza', 'nombre'];


}
