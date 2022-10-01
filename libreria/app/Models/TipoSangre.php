<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoSangre
 *
 * @property $id
 * @property $sangre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoSangre extends Model
{
    
    static $rules = [
		'sangre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sangre'];



}
