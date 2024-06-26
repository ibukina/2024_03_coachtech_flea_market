<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(app()->environment('local') || app()->environment('testing')){
            $categoryItems=[
                [
                    'id'=>'1',
                    'category_id'=>'1',
                    'item_id'=>'1',
                ],
                [
                    'id'=>'2',
                    'category_id'=>'2',
                    'item_id'=>'1',
                ],
                [
                    'id'=>'3',
                    'category_id'=>'3',
                    'item_id'=>'2',
                ],
                [
                    'id'=>'4',
                    'category_id'=>'1',
                    'item_id'=>'3',
                ],
                [
                    'id'=>'5',
                    'category_id'=>'1',
                    'item_id'=>'4',
                ],
                [
                    'id'=>'6',
                    'category_id'=>'2',
                    'item_id'=>'4',
                ],
                [
                    'id'=>'7',
                    'category_id'=>'4',
                    'item_id'=>'5',
                ],
                [
                    'id'=>'8',
                    'category_id'=>'1',
                    'item_id'=>'6',
                ],
                [
                    'id'=>'9',
                    'category_id'=>'1',
                    'item_id'=>'7',
                ],
                [
                    'id'=>'10',
                    'category_id'=>'3',
                    'item_id'=>'8',
                ],
                [
                    'id'=>'11',
                    'category_id'=>'1',
                    'item_id'=>'9',
                ],
                [
                    'id'=>'12',
                    'category_id'=>'2',
                    'item_id'=>'9',
                ],
                [
                    'id'=>'13',
                    'category_id'=>'3',
                    'item_id'=>'10',
                ],
            ];
            DB::table('category_item')->insert($categoryItems);
        }
    }
}
