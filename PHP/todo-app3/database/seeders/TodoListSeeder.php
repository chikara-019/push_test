<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;;
use Illuminate\Support\Facades\DB;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todo_lists')->insert(
            [
                [
                    'name'=>"test1",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name'=>"test2",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name'=>"test3",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name'=>"test1",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name'=>"test2",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'name'=>"test3",
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
            ]
        );
    }
}
