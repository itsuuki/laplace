@extends('layouts.app')
@section('content')
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
@endsection
