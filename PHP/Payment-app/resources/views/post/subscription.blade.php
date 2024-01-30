{{-- ヘッダー部分の設定 --}}
@extends('layouts.app')
@section('content')

<div class="container py-3">
  <h3 class="mb-3">ご登録フォーム</h3>

{{-- フォーム部分 --}}
<form action="{{route('stripe.afterpay')}}" method="post" id="payment-form">
  @csrf
  
    <label for="exampleInputEmail1">お名前</label>
    <input type="test" class="form-control col-sm-5" id="card-holder-name" required>

    <label for="exampleInputPassword1">カード番号</label>
    <div class="form-group MyCardElement col-sm-5" id="card-element"></div>
 
    <div id="card-errors" role="alert" style='color:red'></div>

    <button class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">送信する</button>

</form>
</div>