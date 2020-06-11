$(function() {
  $('#cre-fav').on('click', function() {
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: '/favorite',
      type: 'POST',
      data: {'id': comID,
            '_method': 'DELETE'}
    })
  });
});