<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
/**
 * @SWG\Definition(
 * definition = "User",
 * required = {"unit_id", "key", "name", "email", "password", "active"},
 * @SWG\Property(
 * property = "unit_id",
 * type = "integer",
 * description = "Unit id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "key",
 * type = "string",
 * description = "User key",
 * example = "oooo"
 * ),
 * * @SWG\Property(
 * property = "name",
 * type = "string",
 * description = "User name",
 * example = "Utilidades"
 * ),
 * @SWG\Property(
 * property = "email",
 * type = "string",
 * description = "User email",
 * example = "Admin_gestao@gmail.com"
 * ),
 * @SWG\Property(
 * property = "password",
 * type = "string",
 * description = "User password",
 * example = "Utilidades"
 * ),
 * @SWG\Property(
 * property = "active",
 * type = "boolean",
 * description = "User status",
 * example = "true"
 * )
 * )
 */
class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_id',
        'key',
        'name',
        'email',
        'password',
        'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get JSON WEB TOKEN methods.
     *
     * @var array
     *
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }
}
