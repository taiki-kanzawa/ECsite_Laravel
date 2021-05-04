<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2回目以降の実行の際に前回いれたシーダーをクリア
        DB::table('products')->truncate();

        DB::table('products')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです。',
            'price' => '200000',
            'img' => 'filmcamera.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます。',
            'price' => 20000,
            'img' => 'iyahon.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です。',
            'price' => 120000,
            'img' => 'clock.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です。',
            'price' => 120000,
            'img' => 'earth.jpg',
        ]);
 
 
        DB::table('products')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ。',
            'price' => 9800,
            'img' => 'watch.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です。',
            'price' => 79800,
            'img' => 'lens.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ。',
            'price' => 800,
            'img' => 'shanpan.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです。',
            'price' => 200,
            'img' => 'beer.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです。',
            'price' => 1200,
            'img' => 'yakan.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => '精米',
            'detail' => '米30Kgです。',
            'price' => 11200,
            'img' => 'kome.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です。',
            'price' => 11200,
            'img' => 'pc.jpg',
        ]);
 
        DB::table('products')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです。',
            'price' => 25600,
            'img' => 'aguiter.jpg',
        ]);
    }
}
