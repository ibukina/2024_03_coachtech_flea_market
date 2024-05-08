<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoldItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local') || app()->environment('testing')){
            $soldItems=[
                [
                    'id'=>'1',
                    'user_id'=>'3',
                    'item_id'=>'1',
                ],
            ];
            DB::table('sold_item')->insert($soldItems);
        }
    }
}
