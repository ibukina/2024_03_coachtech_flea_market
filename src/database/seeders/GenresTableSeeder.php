<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres=[
            [
                'id'=>'1',
                'genre'=>'カジュアル',
            ],
            [
                'id'=>'2',
                'genre'=>'メンズ',
            ],
            [
                'id'=>'3',
                'genre'=>'レディース',
            ],
            [
                'id'=>'4',
                'genre'=>'フォーマル',
            ],
        ];
        DB::table('genres')->insert($genres);
    }
}
