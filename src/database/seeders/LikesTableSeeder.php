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
        $likes=[
            [
                'user_id'=>'2',
                'item_id'=>'1',
            ],
            [
                'user_id'=>'3',
                'item_id'=>'1',
            ],
            [
                'user_id'=>'4',
                'item_id'=>'1',
            ],
        ];
        DB::table('likes')->insert($likes);
    }
}
