<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GenderModel;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenderModel::create(['gender'=>'男性']);
        GenderModel::create(['gender'=>'女性']);
        GenderModel::create(['gender'=>'どちらでもない']);
    }
}
