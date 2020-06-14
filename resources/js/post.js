// $(document).ready(function() {
//   $(".drop .option").click(function() {
//     var val = $(this).attr("data-value"),
//         $drop = $(".drop"),
//         prevActive = $(".drop .option.active").attr("data-value"),
//         options = $(".drop .option").length;
//     $drop.find(".option.active").addClass("mini-hack");
//     $drop.toggleClass("visible");
//     $drop.removeClass("withBG");
//     $(this).css("top");
//     $drop.toggleClass("opacity");
//     $(".mini-hack").removeClass("mini-hack");
//     if ($drop.hasClass("visible")) {
//       setTimeout(function() {
//         $drop.addClass("withBG");
//       }, 400 + options*100); 
//     }
//     triggerAnimation();
//     if (val !== "placeholder" || prevActive === "placeholder") {
//       $(".drop .option").removeClass("active");
//       $(this).addClass("active");
//     };
//     // var a = $('.drop .option.active').text();
//     // $('.col-md-8').children()
//     // // if (a = ) {
//     // var b = $('.col-md-8').children();
//     // console.log(b.attr('class'));
//     console.log($('.option active').show())
//     $('.option active').show();
//     // $('.option').hide();
//   });
  
//   function triggerAnimation() {
//     var finalWidth = $(".drop").hasClass("visible") ? 22 : 20;
//     $(".drop").css("width", "24em");
//     setTimeout(function() {
//       $(".drop").css("width", finalWidth + "em");
//     }, 400);
//   }
//   // $('.option').hide();
//   // $('.drop').on('change', function() {    
//   // });
// });
// $(document).ready(function(){
//   $('.option active').show();
//   $('.option').hide();
  // $('.change-btn').click(function () {
  //   $('#wrap').toggleClass('.change-btn');
  //   if($('#wrap').hasClass('.change-btn')){
  //     $('.bottom1').hide();
  //     $('.allimage').show();
  //   }else{
  //     $('.bottom1').show();
  //     $('.allimage').hide();
  //   }
  // });
// });

$(document).ready(function() {
  // executes when HTML-Document is loaded and DOM is ready
 
   
    if (location.hash !== '') $('a[href="' + location.hash + '"]').tab('show');
       return $('a[data-toggle="tab"]').on('shown', function(e) {
       return location.hash = $(e.target).attr('href').substr(1);
     });
   
   
 // document ready  
 });