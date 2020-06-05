<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/shop.js') }}" defer></script>

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

    <label for="sprice">
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
</form>
    </div>
</div>
