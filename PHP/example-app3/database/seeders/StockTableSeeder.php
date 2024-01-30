<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('stocks')->insert([
            'name' => 'フィルムカメラ',
            'explain' => '1960年式のカメラです',
            'fee' => 200000,
            'imagePath' => 'filmcamera.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'イヤホン',
            'explain' => 'ノイズキャンセリングがついてます',
            'fee' => 20000,
            'imagePath' => 'iyahon.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '時計',
            'explain' => '1980年式の掛け時計です',
            'fee' => 120000,
            'imagePath' => 'clock.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '地球儀',
            'explain' => '珍しい商品です',
            'fee' => 120000,
            'imagePath' => 'earth.jpg',
        ]);
 
 
        DB::table('stocks')->insert([
            'name' => '腕時計',
            'explain' => 'プレゼントにどうぞ',
            'fee' => 9800,
            'imagePath' => 'watch.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'カメラレンズ35mm',
            'explain' => '最新式です',
            'fee' => 79800,
            'imagePath' => 'lens.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'シャンパン',
            'explain' => 'パーティにどうぞ',
            'fee' => 800,
            'imagePath' => 'shanpan.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'ビール',
            'explain' => '大量生産されたビールです',
            'fee' => 200,
            'imagePath' => 'beer.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'やかん',
            'explain' => 'かなり珍しいやかんです',
            'fee' => 1200,
            'imagePath' => 'yakan.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '精米',
            'explain' => '米30Kgです',
            'fee' => 11200,
            'imagePath' => 'kome.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'パソコン',
            'explain' => 'ジャンク品です',
            'fee' => 11200,
            'imagePath' => 'pc.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'アコースティックギター',
            'explain' => 'ヤマハ製のエントリーモデルです',
            'fee' => 25600,
            'imagePath' => 'aguiter.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'エレキギター',
            'explain' => '初心者向けのエントリーモデルです',
            'fee' => 15600,
            'imagePath' => 'eguiter.jpg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => '加湿器',
            'explain' => '乾燥する季節の必需品',
            'fee' => 3200,
            'imagePath' => 'steamer.jpeg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'マウス',
            'explain' => 'ゲーミングマウスです',
            'fee' => 4200,
            'imagePath' => 'mouse.jpeg',
        ]);
 
        DB::table('stocks')->insert([
            'name' => 'Android Garxy10',
            'explain' => '中古美品です',
            'fee' => 84200,
            'imagePath' => 'mobile.jpg',
        ]);

    }

    
}
