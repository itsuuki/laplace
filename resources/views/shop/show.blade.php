@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">一覧</div>
                    <div class="container mt-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{ $shop->name }}
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $shop->price }}
                                </p>
                            </div>
                            <a class="shop-news" href="{{ $shop->id }}/edit">
                                店を編集する
                            </a>
                            <a class="review-new" href="{{ route('Review.create', ['shop' => $shop]) }}">
                                レビューを書く
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection