<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local')){
            $likes=[
                [
                    'user_id'=>'4',
                    'item_id'=>'1',
                ],
                [
                    'user_id'=>'5',
                    'item_id'=>'1',
                ],
                [
                    'user_id'=>'6',
                    'item_id'=>'1',
                ],
            ];
            DB::table('likes')->insert($likes);
        }
    }
}
