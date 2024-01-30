<x-app-layout>
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ Auth::user()->name }}さんのカートの中身</h1>
                <p class="text-center">{{ $message ?? '' }}</p><br>
                <div class="">
               {{-- 追加 --}}               
               @foreach($myCartStocks as $stock)
                    {{$stock->stockid}}<br>
                    {{$stock->userid}}<br>
               @endforeach
              {{-- ここまで --}}
                </div>
            </div>
    </div>
</x-app-layout>