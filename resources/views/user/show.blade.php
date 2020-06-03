<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a class="shop-new" href="Shop/create">
    店を登録する
  </a>
  
  @foreach ($shops as $shop)
    <a class="user-shop" href="/Shop/{{ $shop->id }}">
        店の詳細
    </a>
  @endforeach
  <a class="shop-new" href="Post/all">
    投稿一覧
  </a>
  <a class="shop-new" href="{{$id}}/Reservation/show">
    注文一覧
  </a>
</body>
</html>
<!-- "{{ action('ShopController@show', $shop->id) }}" -->