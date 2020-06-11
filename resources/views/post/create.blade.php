@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/post.css') }}">
@section('content')
<form method="POST" action="{{route('Post.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="post-top">
    お店選択<select name="shop_n">
      @foreach ($shops as $shop)
        <option value="{{ $shop->id }}">{{ $shop->sname }}</option>
      @endforeach
    </select>
    <label for="post">
        投稿内容
    </label>
    <textarea
        id="post"
        name="post"
        class="pos-detl {{ $errors->has('post') ? 'is-invalid' : '' }}"
        rows="4"
    >{{ old('post') }}</textarea>
    @if ($errors->has('post'))
      <div class="invalid-feedback">
          {{ $errors->first('post') }}
      </div>
    @endif

    <input type="file" name="image" class="img">
    <div class="mt-5">
      
      <button type="submit" class="post-btn">
        <span>やりましたよ必死に!</span><span>必死でやりましたか？</span>
      </button>
    </div>
    <a class="po-cal" href="/">
        キャンセル
    </a>
  </div>
</form>
@endsection