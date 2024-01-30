<?php

namespace App\Http\Controllers;

use App\Services\YouTubeService;
use App\Models\Item;
use Illuminate\Support\Facades\Log;

class YouTubeController extends Controller
{
    protected $youtubeService;

    public function __construct(YouTubeService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    public function importYoutubeData()
    {
        $channelName = 'UCizpG5Pj_m3MBf7EbL2ZsqQ'; // 取得したいチャンネルID
        //dd($channelName);

        // YouTubeServiceを使用してチャンネル情報取得
        $channelInfo = $this->youtubeService->getChannelInfo($channelName);
        //$channelInfo = $youtube->channels->listChannels('statistics,snippet', ['id' => $channelName]);
        //dd($this->youtubeService->getChannelInfo($channelName));
        //dd($channelInfo);
        //Log::info('YouTubeChannel Info: ' . json_encode(['name'=>$channelName, 'info'=>$channelInfo]));


        //var_dump($channelInfo);
        //dd($channelInfo);

        if ($channelInfo) {
            // データベースに保存
            Item::updateOrCreate(
                ['channel' => $channelName],
                [
                    'channel' => $channelName,
                    //'subscribers' => $channelInfo['subscribers'],
                    'title' => json_encode($channelInfo['videos']),
                    // 他のデータも取得して適切な形式に追加
                ]
            );
            //dd($channelInfo);

            return view('youtube',['channelInfo' => $channelInfo]);
        }

        // チャンネルが見つからなかった場合のエラーハンドリング
        // 例: return redirect('/error')->with('message', '指定されたチャンネルが見つかりませんでした。');
    }
}
