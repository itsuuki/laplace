@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/post_all.css') }}">
  <script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
  <script src="{{ asset('/js/price.js') }}" defer></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<form method="POST" action="{{route('Reservation.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="reser">
        @foreach ($commodity as $com)
            <div class="reser-form">
                {{ $com->name }}
                <div class="com-pri" data-price="{{$com->price}}">
                    {{ $com->price }}円
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
    <div class="total-price">
    <!-- <p> -->
      合計金額<span id="total-price">0</span>円
    <!-- </p> -->
    </div>

    <a class="btn btn-secondary" href="/">
        キャンセル
    </a>

    <button type="submit" class="btn btn-primary">
        登録する
    </button>
@endsection