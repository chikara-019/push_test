<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserComedian;
use App\Models\Comedian;

class UserComedianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        // dd($users);
        $comedians = Comedian::all();

        foreach($users as $user){

            $count = rand(3, 5);
            
            $random_comedians = $comedians->random($count);   // ランダム３〜５件の芸人取得

            foreach($random_comedians as $random_comedian){

                $user_comedian = new UserComedian();
                $user_comedian->user_id = $user->id;
                $user_comedian->comedian_id = $random_comedian->id;
                $user_comedian->save();
            }
        }


    }
}
