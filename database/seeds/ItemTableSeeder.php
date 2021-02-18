<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'りんご',
                'supplier' => 'くだもの',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'きゅうり',
                'supplier' => 'やさい',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '牛肉',
                'supplier' => '肉',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'サンマ',
                'supplier' => '魚',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'グレープ',
                'supplier' => 'くだもの',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ひらめ',
                'supplier' => '魚',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '豚肉',
                'supplier' => '肉',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ラム肉',
                'supplier' => '肉',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '白菜',
                'supplier' => 'やさい',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
