<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersStocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [

            [
                'stockid' => 1,
                'userid' => 1,
            ],
            [
                'stockid' => 2,
                'userid' => 2,
            ],
            // 追加のデータをここに追加
        ];


        foreach($data as $item){

            DB::table('users_stocks')->insert($item);
        }
    }
}
