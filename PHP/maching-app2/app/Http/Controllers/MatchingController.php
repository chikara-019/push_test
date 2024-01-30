<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MatchingController extends Controller
{
    const MIN_MATCHING_COUNT = 1;

    public function show(User $user)
    {
        $comedian_ids = $user->comedians->pluck('id');
        $matched_users = User::with(['comedians' => function($query) use($comedian_ids){ // 👈 同じ「好きな芸人さん」を取得

            $query->whereIn('comedian_id', $comedian_ids);

        }])
        ->where('id', '!=', $user->id)  // 👈 自分以外のデータを取得
        ->get()
        ->filter(function($matched_user){ // 👈 最低でも `MIN_MATCHING_COUNT` 以上マッチするものだけ

            return ($matched_user->comedians->count() >= self::MIN_MATCHING_COUNT);

        })
        ->sortByDesc(function($matched_user) { // 👈 マッチした芸人さんの数で並べ替え（降順）

            return $matched_user->comedians->count();

        });

        return view('matching')->with([
            'user' => $user,
            'matched_users' => $matched_users
        ]);
    }
}
