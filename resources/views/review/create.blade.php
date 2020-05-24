<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
</head>
<body>

<form method="POST" action="{{route('Review.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<!-- <div class="wrap">
  <span class="rate rate0"></span>
  <span class="rate rate1"></span>
  <span class="rate rate1-5"></span>
  <span class="rate rate2"></span>
  <span class="rate rate2-5"></span>
  <span class="rate rate3"></span>
  <span class="rate rate3-5"></span>
  <span class="rate rate4"></span>
  <span class="rate rate4-5"></span>
  <span class="rate rate5"></span>
</div> -->

<label for="evaluation">
  レビュー評価
</label>
<select name="evaluation">
  <option value="1">1(よくない)</option>
  <option value="2">2(あまりよくない)</option>
  <option value="3">3(普通)</option>
  <option value="4">4(よい)</option>
  <option value="5">5(最高)</option>
</select>

<label for="detail">
    レビュー文
</label>
<textarea
    id="detail"
    name="detail"
    class="review-detail"
    rows="4"
>{{ old('detail') }}</textarea>

<!-- <label for="detailaaa">
{{$shop_id->id}}
</label> -->
<input type="hidden" name="id" value="{{$shop_id->id}}">

<a class="btn btn-secondary" href="/">
    キャンセル
</a>

<button type="submit" class="btn btn-primary">
    登録する
</button>

</form>
</body>
</html>