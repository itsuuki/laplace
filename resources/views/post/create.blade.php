<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('Post.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<select name="shop_n">
  @foreach ($shops as $shop)
    <option value="{{ $shop->id }}">{{ $shop->sname }}</option>
  @endforeach
</select>
<label for="post">
    投稿内容
</label>
<textarea
    id="post"
    name="post"
    class="post"
    rows="4"
>{{ old('post') }}</textarea>

<input type="file" name="image">

<div class="mt-5">
<a class="btn btn-secondary" href="/">
    キャンセル
</a>

<button type="submit" class="btn btn-primary">
    登録する
</button>
</form>
</body>
</html>