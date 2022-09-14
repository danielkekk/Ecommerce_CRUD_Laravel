<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'id' => Str::uuid(),
            'category_id' => 1,
            'description' => Str::random(20),
            'name' => Str::random(30),
            'amount' => mt_rand(1, 100),
            'price' => mt_rand(1, 100) / 10.0,
            'barcode' => mt_rand(10000, 99999),
            'unit_id' => 1
        ]);
    }
}
