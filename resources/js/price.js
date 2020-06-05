$(function() {
  // console.log($("[class^=remark]"));
  $('.remark').on('keyup', function(e) {
    // for (let i=0; i<2; i++) {
    // const l = $("[class^=remark]").attr("class")
    let k = e.keyCode;
    // console.log($(this).attr("class"));
    // console.log($(".remark").eq(i).value);
      // console.log("remark"+`[${i}]`);
      // var str = document.getElementById("remark").value;
      // console.log($(this).val());
      var str = $(this).val()
      // const str = document.getElementsByClassName(l).value;
      // var str = $(".remark").eq(i).html();
      // });
      if(!(str.match(/[0-9]/) || (37 <= k && k <= 40) || k === 8 || k === 46)){
        return false;
      } else {
        // コンソールに成人と表示
        // console.log(document.getElementById("com-price").dataset.price);
        console.log(str);
      }
    // }
    });
    
    $('.remark').on('keyup', function(e){
      this.value = this.value.replace(/[^0-9]+/i,'');
    });
    
    $('.remark').on('blur',function(){
      this.value = this.value.replace(/[^0-9]+/i,'');
    });
});