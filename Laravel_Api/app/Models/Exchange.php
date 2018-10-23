<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\User;
use App\Models\Team;
use App\Models\Turn;
use App\Models\Type;
use App\Models\Situation;

/**
 * @SWG\Definition(
 * required = {"unit_id", "user1_id", "team1_id", "user2_id", "team2_id", "date1", "turn1_id", "type1_id", "type2_id", "date2", "turn2_id", "type3_id", "type4_id", "situation_id"},
 * @SWG\Property(
 * property = "unit_id",
 * type = "integer",
 * description = "Unit id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "user1_id",
 * type = "integer",
 * description = "User1 id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "team1_id",
 * type = "integer",
 * description = "Team1 id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "user2_id",
 * type = "integer",
 * description = "User2 id",
 * example = "2"
 * ),
 * @SWG\Property(
 * property = "team2_id",
 * type = "integer",
 * description = "Team2 id",
 * example = "2"
 * ),
 * @SWG\Property(
 * property = "date1",
 * type = "date",
 * description = "Exchange date one",
 * example = "2018-11-20"
 * ),
 * @SWG\Property(
 * property = "turn1_id",
 * type = "integer",
 * description = "Turn1 id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "type1_id",
 * type = "integer",
 * description = "Type1 id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "type2_id",
 * type = "integer",
 * description = "Type2 id",
 * example = "2"
 * ),
 * @SWG\Property(
 * property = "date2",
 * type = "date",
 * description = "Exchange date two",
 * example = "2018-11-22"
 * ),
 * @SWG\Property(
 * property = "turn2_id",
 * type = "integer",
 * description = "Turn2 id",
 * example = "2"
 * ),
 * @SWG\Property(
 * property = "type3_id",
 * type = "integer",
 * description = "Type3 id",
 * example = "2"
 * ),
 * @SWG\Property(
 * property = "type4_id",
 * type = "integer",
 * description = "Type4 id",
 * example = "1"
 * ),
 * @SWG\Property(
 * property = "situation_id",
 * type = "integer",
 * description = "Situation id",
 * example = "1"
 * )
 * )
 */
class Exchange extends Model
{
    protected $filliable = [
        'unit_id',
        'user1_id',
        'team1_id',
        'user2_id',
        'team2_id',
        'date1',
        'turn1_id',
        'type1_id',
        'type2_id',
        'date2',
        'turn2_id',
        'type3_id',
        'type4_id',
        'situation_id',
    ];

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }

    public function user1()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function user2()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function team1()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function team2()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function turn1()
    {
        return $this->belongsTo('App\Models\Turn');
    }

    public function turn2()
    {
        return $this->belongsTo('App\Models\Turn');
    }

    public function type1()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function type2()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function type3()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function type4()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function situation()
    {
        return $this->belongsTo('App\Models\Situation');
    }
}
