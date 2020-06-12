@extends('layouts.app')
<!-- <link href="{{ asset('css/post.css') }}" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ mix('css/post.css') }}">
<script src="{{ asset('/js/favorite.js') }}" defer></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            @guest
            @else

                <!-- <div class="card-header">一覧</div> -->
                <div id="wrap">
                    <div class="change-btn">
                        投稿一覧一覧/店一覧
                        <div class="bottom1">
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
                                                <img src="{{ asset('storage/'. $image->image) }}" width="100px" height="100px">
                                            </div>
                                        @endif
                                    @endforeach
                                    </div>
                        @endforeach
                        </div>
                        <div class="bottom2">
                            @foreach ($shops as $shop)
                                <div class="card mb-4">
                                    <div class="card-header">
                                        {{$shop->sname}}
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            {{$shop->sprice}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
            @endguest
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection