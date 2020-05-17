@extends('layouts.app')

@section('content')
<form method="POST" action="Shop/update" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image">
    <input type="file" name="video">
    <div class="mt-5">
        <a class="btn btn-secondary" href="/">
            キャンセル
        </a>

        <button type="submit" class="btn btn-primary">
            更新する
        </button>
</form>
</div>
@endsection