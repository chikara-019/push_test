<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [

                'id' => '1',
                'name' => '一郎',
                'email' => '1@1',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'name' => '二郎',
                'email' => '2@2',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'name' => '三郎',
                'email' => '3@3',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'name' => '四郎',
                'email' => '4@4',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'name' => '五郎',
                'email' => '5@5',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '6',
                'name' => '六郎',
                'email' => '6@6',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7',
                'name' => '七郎',
                'email' => '7@7',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '8',
                'name' => '八郎',
                'email' => '8@8',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '9',
                'name' => '九郎',
                'email' => '9@9',
                'password'=>Hash::make('P@ssw0rd'),
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
