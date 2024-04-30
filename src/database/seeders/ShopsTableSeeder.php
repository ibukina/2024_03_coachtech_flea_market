<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local')){
            $shops=[
                [
                    'id'=>'1',
                    'user_id'=>'2',
                    'name'=>'ブランド名',
                    'area_id'=>'13',
                    'genre_id'=>'1',
                    'summary'=>'カジュアルな洋服を取り揃えています',
                    'img_url'=>'img/default.svg',
                ],
            ];
            DB::table('shops')->insert($shops);
        }
    }
}
