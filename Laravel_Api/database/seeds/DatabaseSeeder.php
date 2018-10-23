<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UnitsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TurnsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SituationsTableSeeder::class);
        $this->call(ExchangesTableSeeder::class);
    }
}
