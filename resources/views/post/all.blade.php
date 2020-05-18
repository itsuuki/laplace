<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="post-tops">
  @foreach ($posts as $post)
    <div class="post-top">
      <div class="post-header">
        {{ $post->post }}
      </div>
      @foreach ($images as $image)
          @if ($post->id === $image->post_id)
          <img src="storage/app/{{ $image->image }}" width="100px" height="100px">
          @endif
      @endforeach
      <form action="{{ action('PostController@destroy', $post->id) }}" id="form_{{ $post->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <a href="#" data-id="{{ $post->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
      </form>
      <!-- <form method="POST" action="{{ $post->id }}/destroy">
      {{ csrf_field() }}
      {{ method_field('delete') }}

          <button class="btn btn-danger">削除する</button>
      </form> -->
    </div>
  @endforeach
</div>
<script>
function deletePost(e) {
  'use strict';
 
  if (confirm('本当に削除していいですか?')) {
  document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
</body>
</html>