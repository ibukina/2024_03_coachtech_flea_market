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
        $shops=[
            [
                'id'=>'1',
                'user_id'=>'2',
                'name'=>'ブランド名',
            ],
        ];
        DB::table('shops')->insert($shops);
    }
}
