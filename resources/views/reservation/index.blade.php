<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
@foreach ($users as $user)
  {{ $user->name }}
@endforeach
@foreach ($commodities as $commodity)
    @foreach ($commodity as $com)
      {{ $com->name }}
      {{ $com->price }}
      <input type="hidden" name="ids[]" value="{{$com->id}}">
      @foreach ($images as $image)
        @foreach ($image as $ima)
          @if ($com->id === $ima->commodity_id)
          <div class="card-bodys">
            <img src="{{ asset('storage/'. $image->image) }}" width="100px" height="100px">
          </div>
          @endif
            <input type="hidden" name="idss" value="{{$ima->id}}">
            @endforeach
          @endforeach
      @endforeach
@endforeach
</body>
</html>