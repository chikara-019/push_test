<x-app-layout>
    <div class="container-fluid">
        <div class="mx-auto" style="max-width:1200px">
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ Auth::user()->name }}さんのカートの中身</h1>
                <p class="text-center">{{ $message ?? '' }}</p><br>
                <div class="">             
                    @foreach($myCartStocks as $stock)
                        <div class="text-center rounded shadow-lg bg-white p-6 m-4">
                        {{$stock->stock->name}} <br>                                
                        {{ number_format($stock->stock->fee)}}円 <br>
                            <div class="incart flex justify-center p-4 m-4">
                            <img src="/image/{{$stock->stock->imagePath}}" alt=""  width="600">
                            </div>
                            <form action="/deleteMyCartStock" method="post">
                                @csrf
                                <input type="hidden" name="stockId" value="{{ $stock->stock->id }}">
                                <input type="submit" value="カートから削除する">
                            </form>
                        </div>
                    @endforeach
                    {{-- 追加 --}}  
                    @if($myCartStocks->isEmpty())
                       <p class="text-center">カートはからっぽです。</p>
                    @endif
                </div>
            </div>
    </div>
</x-app-layout>