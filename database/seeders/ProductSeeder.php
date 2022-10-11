<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    const NUMBER_OF_PRODCTS = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($numOfProducts=0; $numOfProducts<self::NUMBER_OF_PRODCTS; $numOfProducts++) {
            DB::table('product')->insert([
                'id' => Str::uuid(),
                'amount' => mt_rand(1, 100),
                'barcode' => mt_rand(10000, 99999),
                'created_at' => date('Y-m-d H:i:s'),
                'description' => Str::random(20),
                'name' => Str::random(30),
                'price' => mt_rand(1, 100) / 10.0,
                'summary' => Str::random(20),
                'updated_at' => date('Y-m-d H:i:s'),
                'category_id' => 3,
                'unit_id' => 1
            ]);
        }
    }
}
