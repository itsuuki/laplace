$(function() {
 
  
    $('#deleteTarget').on('click', function() {
      var deleteConfirm = confirm('削除してよろしいでしょうか？');
      console.log("ok");

      if(deleteConfirm == true) {
        var clickEle = $(this)
        // 削除ボタンにユーザーIDをカスタムデータとして埋め込んでます。
        var comID = clickEle.attr('data-com-id');
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      // $.ajax({
        // url: "{{ action('ShopController@destroy', ['id' => comID]) }}",
        url: '/Shop/' + comID,
        type: 'POST',
        data: {'id': comID,
              '_method': 'DELETE'} // DELETE リクエストだよ！と教えてあげる。
      })

      .done(function() {
          // 通信が成功した場合、クリックした要素の親要素の <tr> を削除
          clickEle.parent().remove();
          // console.log(clickEle.parents())
        })

      .fail(function() {
          alert('エラー');
        });

      } else {
        (function(e) {
          e.preventDefault()
        });
      };
    });
  // });
});