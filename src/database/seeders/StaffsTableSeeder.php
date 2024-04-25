<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local')){
            $staffs=[
                [
                    'user_id'=>'6',
                    'shop_id'=>'1',
                ],
                [
                    'user_id'=>'7',
                    'shop_id'=>'1',
                ]
            ];
            DB::table('staffs')->insert($staffs);
        }
    }
}
