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
                'category'=>'洋服',
            ],
            [
                'category'=>'メンズ',
            ],
            [
                'category'=>'アクセサリー',
            ],
            [
                'category'=>'小物',
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
