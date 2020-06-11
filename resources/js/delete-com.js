$(function() {
  $('#deleteTarget').on('click', function() {
    var deleteConfirm = confirm('削除してよろしいでしょうか？');
    if(deleteConfirm == true) {
      var clickEle = $(this)
      var comID = clickEle.attr('data-com-id');
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/Shop/' + comID,
      type: 'POST',
      data: {'id': comID,
            '_method': 'DELETE'}
    })
    .done(function() {
        clickEle.parent().remove();
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
});