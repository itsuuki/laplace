<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> -->
@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('Shop.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="name">
        店名
    </label>
    <input
        id="name"
        name="name"
        class="shop-name"
        value="{{ old('name') }}"
        type="text"
    >

    <label for="photo">
      電話番号  
    </label>
    <input
    id="photo"
    name="photo"
    class="shop-photo"
    value="{{ old('photo') }}"
    type="text"
    >

    <label for="price">
      価格
    </label>
    <input
    id="price"
    name="price"
    class="shop-name"
    value="{{ old('name') }}"
    type="text"
    >

    <label for="region">
      地域
    </label>
    <input
    id="region"
    name="region"
    class="shop-region"
    value="{{ old('region') }}"
    type="text"
    >

    <label for="store_in">
      店内飲食
    </label>
    <input
    id="store_in"
    name="store_in"
    class="shop-store_in"
    value="{{ old('store_in') }}"
    type="text"
    >

    <label for="take_out">
      テイクアウト
    </label>
    <input
    id="take_out"
    name="take_out"
    class="shop-take_out"
    value="{{ old('take_out') }}"
    type="text"
    >

    <label for="delivery">
      デリバリー
    </label>
    <input
    id="delivery"
    name="delivery"
    class="shop-delivery"
    value="{{ old('delivery') }}"
    type="text"
    >
    
    <label for="datail">
        紹介文
    </label>
    <textarea
        id="datail"
        name="datail"
        class="shop-datail"
        rows="4"
    >{{ old('datail') }}</textarea>

    <input type="file" name="image">

    <div class="mt-5">
        <a class="btn btn-secondary" href="/">
            キャンセル
        </a>

        <button type="submit" class="btn btn-primary">
            登録する
        </button>
</form>
    </div>
</div>
@endsection
<!-- </body>
</html> -->