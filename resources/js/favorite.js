// $(function() {
//   $('#cre-fav').on('click', function() {
//     $.ajax({
//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//       url: '/favorite',
//       type: 'POST',
//       data: {'id': comID,
//             '_method': 'DELETE'}
//     })
//   });
// });
$(document).ready(function(){
  $('.bottom1').show();
  $('.bottom2').hide();
  $('.change-btn').click(function () {
    $('#wrap').toggleClass('.change-btn');
    if($('#wrap').hasClass('.change-btn')){
      $('.bottom1').hide();
      $('.bottom2').show();
    }else{
      $('.bottom1').show();
      $('.bottom2').hide();
    }
  });
});