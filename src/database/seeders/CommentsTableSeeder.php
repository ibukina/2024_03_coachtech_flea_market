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
        if(app()->environment('local') || app()->environment('testing')){
            $comments=[
                [
                    'id'=>'1',
                    'user_id'=>'4',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'2',
                    'user_id'=>'4',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'3',
                    'user_id'=>'5',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'4',
                    'user_id'=>'5',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'5',
                    'user_id'=>'6',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'6',
                    'user_id'=>'7',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'7',
                    'user_id'=>'8',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'8',
                    'user_id'=>'9',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'9',
                    'user_id'=>'10',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'10',
                    'user_id'=>'11',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'11',
                    'user_id'=>'12',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'12',
                    'user_id'=>'13',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'13',
                    'user_id'=>'14',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
                [
                    'id'=>'14',
                    'user_id'=>'10',
                    'item_id'=>'1',
                    'comment'=>'コメント',
                ],
            ];
            DB::table('comments')->insert($comments);
        }
    }
}
