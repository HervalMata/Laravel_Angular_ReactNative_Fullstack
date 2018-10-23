<?php

namespace App\Models;

/**
 * @SWG\Definition(
 * required = {"name"},
 * @SWG\Property(
 * property = "name",
 * type = "string",
 * description = "Situation name",
 * example = "Autorizada"
 * )
 * )
 */
use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    protected $fillable = [
        'name',
    ];

    public function exchanges()
    {
        return $this->hasMany('App\Models\Exchange');
    }
}
