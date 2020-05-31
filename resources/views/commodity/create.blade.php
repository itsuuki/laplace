<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('Commodity.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
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
    @endfor
    <a class="btn btn-secondary" href="{{ action('ShopController@show', $id) }}">
        キャンセル
    </a>
    <button type="submit" class="btn btn-primary">
        更新する
    </button>
    <input type="hidden" name="id" value="{{$id}}">
</body>
</html>