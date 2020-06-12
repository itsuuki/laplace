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

$(document).ready(function() {
   
 
  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD

}); // ready() END