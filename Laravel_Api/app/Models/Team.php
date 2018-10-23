<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 * required = {"name"},
 * @SWG\Property(
 * property = "name",
 * type = "string",
 * description = "Team name",
 * example = "A"
 * )
 * )
 */
class Team extends Model
{
    protected $fillable = [
        'name',
    ];

    public function exchanges()
    {
        return $this->hasMany('App\Models\Exchange');
    }
}
