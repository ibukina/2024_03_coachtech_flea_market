<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=[
            [
                'name'=>'商品名',
                'price'=>'47000',
                'description'=>'新品
                商品の状態は良好です。傷もありません。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'1',
            ],
            [
                'name'=>'アクセサリ3点',
                'price'=>'1000',
                'description'=>'中古品です。金属部分が多少曇っている以外問題ありません。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'2',
            ],
            [
                'name'=>'ワイドイージーパンツ',
                'price'=>'2000',
                'description'=>'中古品です。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'2',
            ],
            [
                'name'=>'ヴィンテージジャケット',
                'price'=>'15000',
                'description'=>'中古
                状態は良好です。',
                'img_url'=>'image/default.png',
                'user_id'=>'2',
                'condition_id'=>'1',
            ],
            [
                'name'=>'革財布',
                'price'=>'500',
                'description'=>'中古
                外側はきれいですが内側がひどく、小銭入れなどが機能していません。',
                'img_url'=>'image/default.png',
                'user_id'=>'4',
                'condition_id'=>'3',
            ],
            [
                'name'=>'半袖Ｔシャツ3枚',
                'price'=>'6000',
                'description'=>'新品の半袖Ｔシャツです。色はすべて青です。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'2',
                'condition_id'=>'1',
            ],
            [
                'name'=>'有名ブランドのワンピース5点セット',
                'price'=>'23000',
                'description'=>'新品です。いまの流行ではないため低めに価格設定しています。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'1',
            ],
            [
                'name'=>'バレッタ',
                'price'=>'5000',
                'description'=>'中古品です。小さいですがダイヤモンドがついています。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'2',
            ],
            [
                'name'=>'コート',
                'price'=>'1200',
                'description'=>'中古品です。新品同然とは言えませんが普通にきれいな状態です。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'2',
            ],
            [
                'name'=>'ブローチ',
                'price'=>'1200',
                'description'=>'中古品です。金属部分の曇り、針が曲がっているなど悪い状態です。
                購入後、即発送いたします。',
                'img_url'=>'image/default.png',
                'user_id'=>'1',
                'condition_id'=>'3',
            ],
        ];
        DB::table('items')->insert($items);
    }
}
