<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 * required = {"name"},
 * @SWG\Property(
 * property = "name",
 * type = "string",
 * description = "Type name",
 * example = "TT"
 * )
 * )
 */
class Type extends Model
{
    protected $fillable = [
        'name',
    ];

    public function exchanges()
    {
        return $this->hasMany('App\Models\Exchange');
    }
}
