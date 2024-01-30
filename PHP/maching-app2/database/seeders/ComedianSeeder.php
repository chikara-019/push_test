<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comedian;

class ComedianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comedian_names = [

            '中川家',
            'ますだおかだ',
            'フットボールアワー',
            'アンタッチャブル',
            'ブラックマヨネーズ',
            'チュートリアル',
            'サンドウィッチマン',
            'NON STYLE',
            'パンクブーブー',
            '笑い飯',
            'トレンディエンジェル',
            '銀シャリ',
            'とろサーモン',
            '霜降り明星',
            'ミルクボーイ',
            'マヂカルラブリー',
        ];

        foreach($comedian_names as $comedian_name){

            $comedian = new Comedian();
            $comedian->name = $comedian_name;
            $comedian->save();
        }
    }
}
