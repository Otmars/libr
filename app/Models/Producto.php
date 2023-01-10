<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Nombre
 * @property $Marca
 * @property $Tipo
 * @property $Color
 * @property $Precio
 * @property $Tamaño
 * @property $Otros
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Marca' => 'required',
		'Tipo' => 'required',
		'Color' => 'required',
		'Precio' => 'required',
		'Tamaño' => 'required',
		'Otros' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Marca','Tipo','Color','Precio','Tamaño','Otros'];



}
