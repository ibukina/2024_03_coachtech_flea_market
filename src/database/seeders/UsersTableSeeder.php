<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            [
                'id'=>'1',
                'role_id'=>'1',
                'name'=>'管理者',
                'email'=>'admin@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@B2'),
            ],
            [
                'id'=>'2',
                'role_id'=>'5',
                'name'=>'店舗代表者',
                'email'=>'merchant@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@C3'),
            ],
            [
                'id'=>'3',
                'role_id'=>'10',
                'name'=>'ユーザー名',
                'email'=>'test@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D4'),
            ],
            [
                'id'=>'4',
                'role_id'=>'10',
                'name'=>'出品者',
                'email'=>'test2@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D1'),
            ],
            [
                'id'=>'5',
                'role_id'=>'10',
                'name'=>'名前',
                'email'=>'test3@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D2'),
            ],
            [
                'id'=>'6',
                'role_id'=>'10',
                'name'=>'名前',
                'email'=>'test4@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D3'),
            ],
            [
                'id'=>'7',
                'role_id'=>'10',
                'name'=>'名前',
                'email'=>'test5@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D5'),
            ],
            [
                'id'=>'8',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test6@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D6'),
            ],
            [
                'id'=>'9',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test7@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D7'),
            ],
            [
                'id'=>'10',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test8@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D8'),
            ],
            [
                'id'=>'11',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test9@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D9'),
            ],
            [
                'id'=>'12',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test10@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D10'),
            ],
            [
                'id'=>'13',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test11@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D11'),
            ],
            [
                'id'=>'14',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test12@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D12'),
            ],
            [
                'id'=>'15',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test13@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D13'),
            ],
            [
                'id'=>'16',
                'role_id'=>'10',
                'name'=>'new user',
                'email'=>'test14@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D14'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
