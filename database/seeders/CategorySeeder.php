<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'BARS',
            'parent_id' => '0',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'DAIRY PRODUCTS',
            'parent_id' => '0',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'VEGETABLES',
            'parent_id' => '0',
        ]);
    }
}
