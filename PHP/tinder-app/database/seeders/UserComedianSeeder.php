<?php

namespace Database\Seeders;

use App\Models\Comedian;
use App\Models\User;
use App\Models\UserComedian;
use Illuminate\Database\Seeder;

class UserComedianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        // dd($users);
        $comedians = Comedian::all();
        // dd($comedians);



        foreach ($users as $user) {

            // dd($users);

            $count = rand(3, 5);
            // var_dump($count);
            $random_comedians = $comedians->random($count);   // ランダム３〜５件の芸人取得
            // dd($random_comedians);

            foreach ($random_comedians as $random_comedian) {

                // dd($random_comedians);
                // dd($random_comedian);
                //id=1,name = 中川家

                $user_comedian = new UserComedian();
                $user_comedian -> user_id = $user->id;
                // dd($user_comedian);
                //userid = 1
                // var_dump($user_comedian);
                $user_comedian-> comedian_id = $random_comedian->id;
                // dd($user_comedian);
                $user_comedian->save();
                // dd($user_comedian->save());

            }

        }
    }
}