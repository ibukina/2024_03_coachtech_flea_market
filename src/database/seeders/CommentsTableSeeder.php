<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments=[
            [
                'user_id'=>'1',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'2',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'3',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'4',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'5',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'6',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'7',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'8',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'9',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'10',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'11',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'12',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'13',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
            [
                'user_id'=>'14',
                'item_id'=>'1',
                'comment'=>'コメント',
            ],
        ];
        DB::table('comments')->insert($comments);
    }
}
