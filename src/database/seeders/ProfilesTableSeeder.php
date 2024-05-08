<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local') || app()->environment('testing')){
            $profiles=[
                [
                    'id'=>'1',
                    'user_id'=>'3',
                    'img_url'=>'img/default.svg',
                    'postcode'=>'1600022',
                    'address'=>'東京都新宿区',
                    'building'=>'',
                ],
            ];
            DB::table('profiles')->insert($profiles);
        }
    }
}
