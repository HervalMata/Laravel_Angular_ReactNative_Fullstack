<?php

use Illuminate\Database\Seeder;
use App\Models\Exchange;
use Carbon\Carbon;

class ExchangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(1),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(2),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(3),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(1),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(2),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(3),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(2),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(3),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(1),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
        Exchange::create([
            'unit_id' => 1,
            'user1_id' => 1,
            'team1_id' => 1,
            'user2_id' => 2,
            'team2_id' => 2,
            'date1' => Carbon::now(),
            'turn1_id' => 1,
            'type1_id' => 1,
            'type2_id' => 2,
            'date2' => Carbon::now()->addDay(2),
            'turn2_id' => 2,
            'type3_id' => 2,
            'type4_id' => 1,
            'situation_id' => 2,
        ]);
    }
}
