<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    const NUMBER_OF_USERS = 7;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($numOfProducts=0; $numOfProducts<self::NUMBER_OF_USERS; $numOfProducts++) {
            DB::table('users')->insert([
                'name' => Str::random(20),
                'email' => Str::random(10) . '@' . Str::random(5) .'.com',
                'password' => '-',
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
