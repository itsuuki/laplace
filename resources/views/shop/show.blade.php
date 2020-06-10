@extends('layouts.app')
<!-- <link rel="stylesheet" href="{{ asset('css/review.css') }}"> -->
<link rel="stylesheet" href="{{ mix('css/shop.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                
                    <div class="container mt-4"> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $shop->sname }}
                            </div>
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
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $shop->sprice }}
                                </p>
                                <div class="col-md-3">
                                    <form action="{{ route('unfavorites', $shop) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="submit" value="&#xf164;いいね取り消す" class="fas btn btn-danger">
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <form action="{{ route('favorites', $shop) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="submit" value="&#xf164;いいね" class="fas btn btn-success">
                                    </form>
                                </div>
                                <div class="wrapper">
                                    <a class="reservation-new" href="{{ $shop->id }}/Reservation/create">
                                        注文する
                                    </a>
                                    <a class="review-new" href="{{ $shop->id }}/review/create">
                                        レビューを書く
                                    </a>
                                    @if ($shop->user_id === Auth::user()->id )
                                        <a class="shop-edits" href="{{ $shop->id }}/edit">
                                            店を編集する
                                        </a>
                                        <a class="com-edits" href="{{ $shop->id }}/Commodity/create">
                                            商品を追加する
                                        </a>
                                        <a class="review-ne" href="{{ $shop->id }}/Reservation">
                                            注文一覧,店
                                        </a>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <div>
                            @foreach ($reviews as $rev)
                            {{ $rev->detail }}
                            @endforeach
                            <!-- </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection