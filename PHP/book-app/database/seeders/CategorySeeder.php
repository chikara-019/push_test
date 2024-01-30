<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Category::create(['name'=>'日用品']);
        Category::create(['name'=>'交通費']);
        Category::create(['name'=>'水道、光熱費']);
        Category::create(['name'=>'通信費']);
    }
}
