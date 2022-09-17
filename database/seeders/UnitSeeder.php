<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'id' => 1,
            'name' => 'Kilogram',
            'unit' => 'kg',
        ]);

        Unit::create([
            'id' => 2,
            'name' => 'Gram',
            'unit' => 'g',
        ]);

        Unit::create([
            'id' => 3,
            'name' => 'Pieces',
            'unit' => 'pcs',
        ]);
    }
}
