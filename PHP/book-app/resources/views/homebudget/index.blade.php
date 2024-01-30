<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>家計簿アプリ</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <header>
        <h1>家計簿アプリ</h1>
    </header>

    <section class="container">
        <div class="balance">
            <h3>支出一覧</h3>
            @if(session('flash_message'))
                <div class="flash_message">
                    {{ session('flash_message') }}
                </div>
            @endif
            @if(session('flash_error_message'))
                <div class="flash_error_message">
                    {{ seesion('flash_error_message') }}
                </div>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>日付</th>
                        <th>カテゴリ</th>
                        <th>金額</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 支出データのループ処理 -->
                </tbody>
            </table>
        </div>
        <div class="add-balance">
            <h3>支出の追加</h3>
            <form action="{{ route('store')}}" method="POST">
                @csrf
                <label for="date">日付:</label>
                <input type="date" id="date" name="date">
                @if($errors->has('date')) <span class="error">{{$errors->first('date')}}</span> @endif
                <label for="category">カテゴリ:</label>
                <select name="category" id="category">
                    @foreach($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if($errors->has('catefory')) <span class="error">{{$errors->first('category')}} </span> @endif
                <label for="price">金額:</label>
                <input type="text" id="price" name="price">
                @if($errors->has('price')) <span class="error">{{$errors->first('price')}}</span> @endif
                <button type="submit">追加</button>
            </form>
        </div>
    </section>
</body>
</html>