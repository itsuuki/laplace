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
</body>
</html>
<!-- "{{ action('ShopController@show', $shop->id) }}" -->