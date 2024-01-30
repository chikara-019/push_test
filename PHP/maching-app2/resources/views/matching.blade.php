<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="p-4">
    <h5>{{ $user->name }} さん</h5>
    <div>
        <span class="badge bg-primary">好きな芸人さん</span> {{ $user->comedians->pluck('name')->join('、') }}

    </div>
    <hr>
    <h6 class="mb-3">マッチしたユーザー</h6>
    <ul>
    @foreach($matched_users as $matched_user)
        <li class="mb-3">
            {{ $matched_user->name }} さん<br>
            <h5>{{ $matched_user->email }}</h5>

            <span class="badge bg-success">マッチした芸人さん</span>（{{ $matched_user->comedians->count() }}件）
             {{ $matched_user->comedians->pluck('name')->join('、') }}
        </li>
    @endforeach
    </ul>
</div>
</body>
</html>