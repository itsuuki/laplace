<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('Reservation.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @foreach ($commodity as $com)
    <!-- {{ $image }} -->
    {{ $com->name }}
    {{ $com->price }}
    <input type="hidden" name="ids[]" value="{{$com->id}}">
    @foreach ($image as $ima)
    @if ($com->id === $ima->commodity_id)
    <div class="card-bodys">
        <img src="storage/app/{{ $ima->image }}" width="100px" height="100px">
        </div>
        @endif
        <input type="hidden" name="idss" value="{{$ima->id}}">
        @endforeach
    @endforeach
    @for($i = 0 ; $i < $commodities; $i ++)
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
    @endfor

    <a class="btn btn-secondary" href="/">
        キャンセル
    </a>

    <button type="submit" class="btn btn-primary">
        登録する
    </button>
</body>
</html>