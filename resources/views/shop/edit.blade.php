<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="{{ asset('/js/delete-com.js') }}" defer></script>
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

    <label for="sprice">
      平均価格
    </label>
    <input
    id="sprice"
    name="sprice"
    class="shop-name"
    value="{{ old('sprice', $shop->sprice) }}"
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

    @foreach ($image as $img)
        @if ($shop->id === $img->shop_id)
            <div class="card-bodys">
              <img src="{{ asset('storage/'. $img->image) }}" width="100px" height="100px">
            </div>
        @else
        <div class="shop-img">
          <input type="file" name="img">
        </div>
        @endif
    @endforeach
    
        @foreach ($commodity as $com)
          <div class="oya">
            <label for="com-name">
              商品
            </label>
            <input
            id="name"
            name="name[]"
            class="name"
            value="{{ old('name', $com->name) }}"
            type="text"
            >

            <label for="com-price">
              金額
            </label>
            <input
            id="price"
            name="price[]"
            class="price"
            value="{{ old('price', $com->price) }}"
            type="text"
            >

            <label for="description">
                商品紹介
            </label>
            <textarea
                id="description"
                name="description[]"
                class="description"
                rows="4"
            >{{ old('description', $com->description) }}</textarea>

            <input type="hidden" name="num[]" value="{{$com->id}}">
            <input type="file" name="image[]">

            <a class="review-ne" id="deleteTarget" data-com-id="{{$com->id}}">
                削除
            </a>
          </div>
          @foreach ($images as $imgs)
            @foreach ($imgs as $ima)
              @if ($com->id === $ima->commodity_id)
              <div class="card-bodys">
                <img src="{{ asset('storage/'. $ima->image) }}" width="100px" height="100px">
              </div>
              @else
              <!-- <div class="shop-img">
                <input type="file" name="img">
              </div> -->
              <!-- {{$com->name}} -->
              @endif
            @endforeach
          @endforeach
          
        @endforeach
          <div class="mt-5">
            <a class="btn btn-secondary" href="{{ action('ShopController@show', $shop->id) }}">
              キャンセル
            </a>
            <button type="submit" class="btn btn-primary">
              更新する
            </button>
            <input type="hidden" name="id" value="{{$shop->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <!-- <input type="hidden" name="ids" value="{{$commodities}}"> -->
</form>
</div>
</body>
</html>