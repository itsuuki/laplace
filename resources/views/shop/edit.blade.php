<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="{{ asset('/js/shop.js') }}" defer></script>
</head>
<body>
  
<form method="POST" action="{{url('Shop/update')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <!-- @method('PUT') -->
    
    <label for="name">
        店名
    </label>
    <input
        id="sname"
        name="sname"
        class="shop-sname"
        value="{{ old('sname', $shop->sname) }}"
        type="text"
    >

    <label for="photo">
      電話番号  
    </label>
    <input
    id="photo"
    name="photo"
    class="shop-photo"
    value="{{ old('photo', $shop->photo) }}"
    type="text"
    >

    <label for="price">
      平均価格
    </label>
    <input
    id="price"
    name="price"
    class="shop-name"
    value="{{ old('price', $shop->price) }}"
    type="text"
    >

    <label for="region">
      地域
    </label>
    <input
    id="region"
    name="region"
    class="shop-region"
    value="{{ old('region', $shop->region) }}"
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
    >{{ old('datail', $shop->datail) }}</textarea>

    <div class="shop-img">
    <input type="file" name="image">
    </div>
    
        @foreach ($commodity as $com)
        <label for="com-name">
          商品
        </label>
        <input
        id="name"
        name="name"
        class="name"
        value="{{ old('name', $com->name) }}"
        type="text"
        >

        <label for="com-price">
          金額
        </label>
        <input
        id="com-price"
        name="com-price[]"
        class="com-price"
        value="{{ old('com-price', $com->price) }}"
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
        >{{ old('description', $com->description) }}</textarea>
        @endforeach
        <!-- <div class="con">追加</div> -->
    <p>
      新規商品数<span id="press-button">1</span>個
    </p>
    <!-- <div id="input_pluralBox" data-index=1>
      <div id="input_plural" > -->
      @for($i = 0 ; $i < 3; $i ++)
          <label for="com-name">
            商品
          </label>
          <input
          id="name"
          name="name[]"
          class="name"
          value="{{ old('name') }}"
          type="text"
          >

          <label for="com-price">
            金額
          </label>
          <input
          id="price"
          name="price[]"
          class="price"
          value="{{ old('price') }}"
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
          >{{ old('description') }}</textarea>
        
        <!-- <div class="con">追加</div> -->
        
        
        <!-- <input type="button" value="＋" class="add pluralBtn">
        <input type="button" value="－" class="del pluralBtn"> -->
        <input type="hidden" name="num[]">
      </div>
    </div>
   
    @endfor
      
      <!-- <div class="exhibition__detail__des__cou__tag">削除</div> -->
    </div>
    <!-- <div class="con">追加</div> -->


    <!-- <input type="file" name="image"> -->
    <!-- <input type="file" name="video"> -->
    <!-- @foreach ($commodity as $com) -->
        <!-- @endforeach -->
    <div class="mt-5">
    <a class="btn btn-secondary" href="{{ action('ShopController@show', $shop->id) }}">
        キャンセル
    </a>
    <button type="submit" class="btn btn-primary">
        更新する
    </button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$shop->id}}">
    <input type="hidden" name="ids" value="{{$commodities}}">
</form>
</div>
</body>
</html>