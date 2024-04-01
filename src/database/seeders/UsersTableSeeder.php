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
                'name'=>'ユーザー名',
                'email'=>'test@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D4'),
            ],
            [
                'name'=>'出品者',
                'email'=>'test2@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D1'),
            ],
            [
                'name'=>'new user',
                'email'=>'test3@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D2'),
            ],
            [
                'name'=>'new user',
                'email'=>'test4@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D3'),
            ],
            [
                'name'=>'new user',
                'email'=>'test5@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D5'),
            ],
            [
                'name'=>'new user',
                'email'=>'test6@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D6'),
            ],
            [
                'name'=>'new user',
                'email'=>'test7@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D7'),
            ],
            [
                'name'=>'new user',
                'email'=>'test8@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D8'),
            ],
            [
                'name'=>'new user',
                'email'=>'test9@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D9'),
            ],
            [
                'name'=>'new user',
                'email'=>'test10@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D10'),
            ],
            [
                'name'=>'new user',
                'email'=>'test11@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D11'),
            ],
            [
                'name'=>'new user',
                'email'=>'test12@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D12'),
            ],
            [
                'name'=>'new user',
                'email'=>'test13@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D13'),
            ],
            [
                'name'=>'new user',
                'email'=>'test14@example.com',
                'password'=>Hash::make('2DDywxxwE3VM@D14'),
            ],
        ];
        DB::table('users')->insert($users);
    }
}
