<div class="container">
    <h1>YouTube Channel Information</h1>

    @if(isset($channelInfo['subscribers']))
        <h2>Subscribers:</h2>
        <p>{{ $channelInfo['subscribers'] }}</p>
    @else
        <p>No subscriber information found.</p>
    @endif

    @if(isset($channelInfo['videos']))
        <h2>Videos:</h2>
        @foreach($channelInfo['videos'] as $video)
            @if(isset($video['title']))
                <p>{{ $video['title'] }}</p>
            @else
                <p>No video title found.</p>
            @endif
        @endforeach
    @else
        <p>No video information found.</p>
    @endif
</div>
