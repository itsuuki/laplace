<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="{{ asset('/js/price.js') }}" defer></script>
</head>
<body>
<form method="POST" action="{{route('Reservation.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="reser">
        @foreach ($commodity as $com)
            <div class="reser-form">
                {{ $com->name }}
                <div class="com-pri" data-price="{{$com->price}}">
                    {{ $com->price }}
                </div>
                <input type="hidden" name="ids[]" value="{{$com->id}}">
                @foreach ($image as $ima)
                    @if ($com->id === $ima->commodity_id)
                        <div class="card-bodys">
                        <img src="storage/app/{{ $ima->image }}" width="100px" height="100px">
                        </div>
                    @endif
                    <input type="hidden" name="idss" value="{{$ima->id}}">
                @endforeach
                <label for="comm-name">
                        個数
                </label>
                    <input
                    id="remark"
                    name="remark[]"
                    class="remark"
                    value="{{ old('remark', 0) }}"
                    type="text"
                    >
                <input type="hidden" name="idsss" value="{{$shop_id}}">
                <input type="hidden" name="num[]">
                <p>
                    商品金額<span id="com-price"class="com-price">0</span>円
                </p>
            </div>
        @endforeach
    </div>
    <p>
      合計金額<span id="total-price">0</span>円
    </p>

    <a class="btn btn-secondary" href="/">
        キャンセル
    </a>

    <button type="submit" class="btn btn-primary">
        登録する
    </button>
</body>
</html>