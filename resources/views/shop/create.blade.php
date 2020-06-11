@extends('layouts.app')
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/shop.js') }}" defer></script>
@section('content')
<form method="POST" action="{{route('Shop.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	  @endif
    <label for="name">
        店名
    </label>
    <input
        id="sname"
        name="sname"
        class="shop-sname {{ $errors->has('sname') ? 'is-invalid' : '' }}"
        value="{{ old('sname') }}"
        type="text"
    >
   

    <label for="photo">
      電話番号  
    </label>
    <input
    id="photo"
    name="photo"
    class="shop-photo {{ $errors->has('photo') ? 'is-invalid' : '' }}"
    value="{{ old('photo') }}"
    type="text"
    >
    

    <label for="sprice">
      平均価格
    </label>
    <input
    id="sprice"
    name="sprice"
    class="shop-sprice {{ $errors->has('sprice') ? 'is-invalid' : '' }}"
    value="{{ old('sprice') }}"
    type="text"
    >
    

    <label for="region">
      地域
    </label>
    <input
    id="region"
    name="region"
    class="shop-region {{ $errors->has('region') ? 'is-invalid' : '' }}"
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
        class="shop-datail {{ $errors->has('datail') ? 'is-invalid' : '' }}"
        rows="4"
    >{{ old('datail') }}</textarea>
    

    <div class="shop-img">
      <input type="file" name="img">
    </div>

    <p>
      新規商品数<span id="press-button">1</span>個
    </p>
    <div id="input_pluralBox" data-index="1">
      <div id="input_plural" class="input_plural[]">
          <label for="com-name">
            商品
          </label>
          <input
          id="name"
          name="name[]"
          class="name {{ $errors->has('name[]') ? 'is-invalid' : '' }}"
          value=""
          type="text"
          >
          

          <label for="com-price">
            金額
          </label>
          <input
          id="price"
          name="price[]"
          class="price {{ $errors->has('price[]') ? 'is-invalid' : '' }}"
          value=""
          type="text"
          >
          

          <label for="description">
              商品紹介
          </label>
          <textarea
              id="description"
              name="description[]"
              class="com-description"
              rows="4"
          ></textarea>
        <input type="button" value="＋" class="add pluralBtn[]">
        <input type="button" value="－" class="del pluralBtn[]">
        <input type="hidden" name="num[]">
        <input type="file" name="image[]">
      </div>
    </div>

    <div class="mt-5">
        <a class="btn btn-secondary" href="/">
            キャンセル
        </a>

        <button type="submit" class="btn btn-primary">
            登録する
        </button>
    </div>
</form>
<div class="backg">
  背景の色を変える
</div>
@endsection