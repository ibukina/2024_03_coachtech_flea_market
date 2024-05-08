<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions=[
            [
                'id'=>'1',
                'condition'=>'良好',
            ],
            [
                'id'=>'2',
                'condition'=>'普通',
            ],
            [
                'id'=>'3',
                'condition'=>'不良',
            ],
        ];
        DB::table('conditions')->insert($conditions);
    }
}
