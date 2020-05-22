@extends('layouts.app')

@section('content')
<form method="POST" action="{{url('Shop/update')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <!-- @method('PUT') -->
    
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
      平均価格
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
    <select name="store_in">
      <option value="あり">あり</option>
      <option value="なし">なし</option>
    </select>

    <label for="take_out">
      テイクアウト
    </label>
    <select name="take_out">
      <option value="あり">あり</option>
      <option value="なし">なし</option>
    </select>

    <label for="delivery">
      デリバリー
    </label>
    <select name="delivery">
      <option value="あり">あり</option>
      <option value="なし">なし</option>
    </select>
    
    <label for="datail">
        店紹介
    </label>
    <textarea
        id="datail"
        name="datail"
        class="shop-datail"
        rows="4"
    >{{ old('datail') }}</textarea>

    <div class="shop-img">
    <input type="file" name="image">
    </div>

    <!-- <div class="con">追加</div> -->


    <!-- <input type="file" name="image"> -->
    <!-- <input type="file" name="video"> -->
    <div class="mt-5">
    <a class="btn btn-secondary" href="{{ action('ShopController@show', $shop->id) }}">
        キャンセル
    </a>
    <button type="submit" class="btn btn-primary">
        更新する
    </button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$shop->id}}">
</form>
</div>
@endsection