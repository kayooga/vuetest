<?php

use Illuminate\Database\Seeder;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            [
                'item_id' => 1,
                'price' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 2,
                'price' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 3,
                'price' => 580,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 4,
                'price' => 240,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 5,
                'price' => 140,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 6,
                'price' => 280,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 7,
                'price' => 480,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 8,
                'price' => 780,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 9,
                'price' => 280,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
