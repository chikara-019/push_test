<?php
// app/Services/YouTubeService.php

namespace App\Services;

use Google\Client;
use Google\Service\YouTube;

class YouTubeService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
        //var_dump($client);
        //dd($client);
        $this->client->setDeveloperKey('AIzaSyD4s45kVBQhgJ7BhtIlYWHa9SacvlEa8-Y'); // YOUR_API_KEY には、Google Cloud Console で作成した API キーを設定してください
        
    }

    public function getChannelInfo($channelName)
    {
        $youtube = new YouTube($this->client);

        //dd($youtube);

        // チャンネル情報の取得
        //$response = $youtube->channels->listChannels('statistics,snippet', ['forUsername' => $channelName]);
        $response = $youtube->channels->listChannels('statistics,snippet', ['id' => $channelName]);
        

        //var_dump($response);
        //dd($response); // この行を追加してデバッグ出力




        if (!empty($response->getItems())) {
            $channel = $response->getItems()[0];
            $channelInfo = [
                'subscribers' => $channel['statistics']['subscriberCount'],
                'videos' => $this->getLatestVideos($channel['id']),
            ];
            return $channelInfo;
        }
        //dd($response);

        return null;
    }

    private function getLatestVideos($channelId)
    {
        //最新の5本の動画情報を取得
        $youtube = new YouTube($this->client);
        $response = $youtube->search->listSearch('snippet', ['channelId' => $channelId, 'maxResults' => 5]);
        $views= $videoStatistics['viewCount'] ?? 0;

        $videos = [];
        foreach ($response->getItems() as $video) {
            $videos[] = [
                'title' => $video['snippet']['title'],
                // その他カラム追加
            ];
        }

        return $videos;
    }
}
