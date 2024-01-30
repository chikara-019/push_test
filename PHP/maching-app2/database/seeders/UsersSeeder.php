<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
//models/Userを記載している為、テーブルを指定しなくてもモデル名からusersテーブルと推測され、値が入る。
//これを記載しいないのであれば、DB::table('users')->insert([　等を使用する。
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;




class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [

            'sato',
            'tanaka',
            'ikeda',
            'tamura',
            'sasaki',
            'yokoo',
            'saitou',
            'taguvhi',
            'tomono',
            'sikano',
            'harimoto',
            'masuo',
            'oosaka',
            'oota',
            'kasuya',
            'tashiro',
            'katou',
            'iida',
            'katori',
            'tabata',
            'kondou',
            'higashi',
            'taira',
            'toki',
        ];

        foreach($names as $name_jp){

            //DB::table('users')->insert

            User::create([

                'name'=>$name_jp,
                'email'=>$name_jp.'@example.com',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at'=>now(),
                'updated_at'=>now(),

            ]);
            

        }
    }
}
