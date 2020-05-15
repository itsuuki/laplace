@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('Shop.update', ['shop' => $shop])}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image">
    <input type="file" name="video">
    <div class="mt-5">
        <a class="btn btn-secondary" href="/">
            キャンセル
        </a>

        <button type="submit" class="btn btn-primary">
            登録する
        </button>
</form>
</div>
@endsection