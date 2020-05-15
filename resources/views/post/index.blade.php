@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">一覧</div>
                    <div class="container mt-4">
                        @foreach ($shops as $shop)
                            <div class="card mb-4">
                                <div class="card-header">
                                    {{ $shop->name }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $shop->price }}
                                    </p>
                                </div>
                            </div>
                            @foreach ($images as $image)
                                <div class="card-bodys">
                                    <img src="{{asset('storage/'. $image->image)}}" width="100px" height="100px">
                                </div>
                            @endforeach
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection