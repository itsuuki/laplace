@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @guest
            @else
                <div class="card-header">一覧</div>
                    <div class="container mt-4">
                        @foreach ($shops as $shop)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <a class="user-shop" href="/Shop/{{ $shop->id }}">
                                        {{ $shop->sname }}
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $shop->price }}
                                    </p>
                                </div>
                            </div>
                            @foreach ($images as $image)
                                @if ($shop->id === $image->shop_id)
                                    <div class="card-bodys">
                                        <img src="storage/app/{{ $image->image }}" width="100px" height="100px">
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
            @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- <img src="{{asset('storage/app/. $image->image')}}" width="100px" height="100px"> -->