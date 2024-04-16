<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            [
                'id'=>'1',
                'role'=>'管理者',
            ],
            [
                'id'=>'5',
                'role'=>'店舗管理者',
            ],
            [
                'id'=>'10',
                'role'=>'一般ユーザー',
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
