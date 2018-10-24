<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'units' => 'API\UnitController',
    'situations' => 'API\SituationController',
    'teams' => 'API\TeamController',
    'turns' => 'API\TurnController',
    'types' => 'API\TypeController',
    'exchanges' => 'API\ExchangeController',
]);

Route::post('register', 'API/AuthController@register');
Route::post('login', 'API/AuthController@login');
Route::post('logout', 'API/AuthController@logout');
Route::put('users/{id}', 'API/AuthController@update');
Route::delete('users/{id}', 'API/AuthController@delete');
Route::get('users/{id}', 'API/AuthController@show');
Route::get('users', 'API/AuthController@index');

Route::middleware('jwt.auth')->get('me', function(Request $request) {
    return auth()->user();
});
