@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">一覧</div>
                <div class="wrap">
                    @if ($review === 0)
                    <span class="rate rate0"></span>
                    @elseif ($review <= 1)
                    <span class="rate rate1"></span>
                    @elseif ($review <= 1.5)
                    <span class="rate rate1-5"></span>
                    @elseif ($review <= 2)
                    <span class="rate rate2"></span>
                    @elseif ($review <= 2.5)
                    <span class="rate rate2-5"></span>
                    @elseif ($review <= 3)
                    <span class="rate rate3"></span>
                    @elseif ($review <= 3.5)
                    <span class="rate rate3-5"></span>
                    @elseif ($review <= 4)
                    <span class="rate rate4"></span>
                    @elseif ($review <= 4.5)
                    <span class="rate rate4-5"></span>
                    @else
                    <span class="rate rate5"></span>
                    @endif
                </div>
                    <div class="container mt-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $shop->sname }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $shop->price }}
                                </p>
                            </div>
                            <a class="shop-news" href="{{ $shop->id }}/edit">
                                店を編集する
                            </a>
                            <a class="commodity-new" href="{{ $shop->id }}/Commodity/create">
                                商品を追加する
                            </a>
                            <a class="reservation-new" href="{{ $shop->id }}/Reservation/create">
                                注文する
                            </a>
                            <a class="review-new" href="{{ $shop->id }}/review/create">
                                レビューを書く
                            </a>
                            <div>
                            @foreach ($reviews as $rev)
                            {{ $rev->detail }}
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection