<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $carne
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $telefono
 * @property $correo_electronico
 * @property $sangre_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'carne' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'correo_electronico' => 'required',
		'sangre_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carne','nombre','apellido','direccion','telefono','correo_electronico','sangre_id'];



}
