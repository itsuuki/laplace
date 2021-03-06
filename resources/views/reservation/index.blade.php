@extends('layouts.app')
@section('content')

@foreach ($commodities as $commodity)
    @foreach ($commodity as $com)
      {{ $com->name }}
      {{ $com->price }}
      <input type="hidden" name="ids[]" value="{{$com->id}}">
      @foreach ($images as $image)
        @foreach ($image as $ima)
        {{$ima->id}}
          @if ($com->id === $ima->commodity_id)
          <div class="card-bodys">
            <img src="{{ asset('storage/'. $ima->image) }}" width="100px" height="100px">
          </div>
          @endif
            <input type="hidden" name="idss" value="{{$ima->id}}">
            @endforeach
          @endforeach
      @endforeach
@endforeach
@endsection