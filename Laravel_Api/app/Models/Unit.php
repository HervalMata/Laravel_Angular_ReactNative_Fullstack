<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 * required = {"name"},
 * @SWG\Property(
 * property = "name",
 * type = "string",
 * description = "Unit name",
 * example = "Utilidades"
 * )
 * )
 */
class Unit extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
