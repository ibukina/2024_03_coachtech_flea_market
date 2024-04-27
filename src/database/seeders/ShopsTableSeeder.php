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
                    'area'=>'東京都',
                    'genre'=>'モダン',
                    'description'=>'モダンな洋服を取り揃えています',
                    'img_url'=>'img/default.svg',
                ],
            ];
            DB::table('shops')->insert($shops);
        }
    }
}
