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
                'condition'=>'良好',
            ],
            [
                'condition'=>'普通',
            ],
            [
                'condition'=>'不良',
            ],
        ];
        DB::table('conditions')->insert($conditions);
    }
}
