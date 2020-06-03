<script src="{{ asset('/js/shop.js') }}" type="text/javascript"></script>

<form method="POST" action="{{route('Shop.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="name">
        店名
    </label>
    <input
        id="sname"
        name="sname"
        class="shop-sname"
        value="{{ old('sname') }}"
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
    id="sprice"
    name="sprice"
    class="shop-name"
    value="{{ old('sprice') }}"
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

    <div class="a">
    <div class="b">
    <div class="com-data" data-index="{#index}">
    <div class="c">
    <label for="com-name">
      商品
    </label>
    <input
    id="com-name"
    name="com-name"
    class="com-name"
    value="{{ old('com-name') }}"
    type="text"
    >

    <label for="com-price">
      金額
    </label>
    <input
    id="com-price"
    name="com-price"
    class="com-price"
    value="{{ old('com-price') }}"
    type="text"
    >

    <label for="description">
        商品紹介
    </label>
    <textarea
        id="description"
        name="description"
        class="com-description"
        rows="4"
    >{{ old('description') }}</textarea>

    <input type="file" name="image">

    <div class="con">追加</div>

    </div>
    </div>
    </div>
    </div>

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
