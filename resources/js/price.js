$(function() {
  $('.remark').on('keyup', function(e) {
    var str = $(this).val()
    if( str.match( /[^0-9.,-]+/ ) ) {
      alert("半角数字で入力して下さい。");
      return false;
    } else {
    var kk = $(this).parent()
    var item_price = kk.children().data("price");
    var mm = kk.find('.com-price')
    mm.html(item_price*str)
    var total = 0;
    var array = [];
    var nn = document.getElementsByClassName("com-price");
    for (i = 0; i < nn.length; i++) {
      var totals = nn[i].innerHTML;
      var total = total + Number(totals);
      array.push(total)
      var total_price = array.pop()
    }
    document.getElementById("total-price").innerHTML = total_price;
    }
  });
});