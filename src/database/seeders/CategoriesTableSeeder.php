<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            [
                'id'=>'1',
                'category'=>'洋服',
            ],
            [
                'id'=>'2',
                'category'=>'メンズ',
            ],
            [
                'id'=>'3',
                'category'=>'アクセサリー',
            ],
            [
                'id'=>'4',
                'category'=>'小物',
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
