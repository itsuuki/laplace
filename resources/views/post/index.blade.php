@extends('layouts.app')
<link href="{{ asset('css/post.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            @guest
            @else
                <!-- <div class="card-header">一覧</div> -->
                    <!-- <div class="container mt-4"> -->
                @foreach ($posts as $post)
                    @foreach ($shops as $shop)
                        @if ($post->shop_id === $shop->id)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <a class="user-shop" href="/Shop/{{ $shop->id }}">
                                        {{ $shop->sname }}
                                    </a>
                                </div>
                        @endif
                    @endforeach
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $post->post }}
                                </p>
                            </div>
                            @foreach ($images as $image)
                                @if ($post->id === $image->post_id)
                                    <div class="card-bodys">
                                        <img src="storage/app/{{ $image->image }}" width="100px" height="100px">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                @endforeach
            @endguest
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
@endsection