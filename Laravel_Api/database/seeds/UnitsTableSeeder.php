<?php

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => 'TEU',
        ]);
        Unit::create([
            'name' => 'Hidrogenio',
        ]);
        Unit::create([
            'name' => 'Movimentação',
        ]);
        Unit::create([
            'name' => 'TMA',
        ]);
        Unit::create([
            'name' => 'Utilidades',
        ]);
        Unit::create([
            'name' => 'Amonia',
        ]);
    }
}
