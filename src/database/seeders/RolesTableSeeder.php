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
                'role'=>'admin',
            ],
            [
                'id'=>'5',
                'role'=>'merchant',
            ],
            [
                'id'=>'10',
                'role'=>'user',
            ],
        ];
        DB::table('roles')->insert($roles);
    }
}
