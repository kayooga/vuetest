<?php

use Illuminate\Database\Seeder;

class TraderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traders')->insert([
            [
                'trader_code' => 1001,
                'trader_name' => 'くだもの',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trader_code' => 1002,
                'trader_name' => 'やさい',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trader_code' => 1003,
                'trader_name' => '肉',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'trader_code' => 1004,
                'trader_name' => '魚',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
