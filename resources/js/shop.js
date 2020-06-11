$(function(){
  const buildFileField = (index)=> {
    const html = `
    <div id="input_plural" class="input_plural[${index}]">
      <label for="com-name">
        商品
      </label>
      <input
      id="name"
      name="name[${index}]"
      class="name {{ $errors->has('name[${index}]') ? 'is-invalid' : '' }}"
      value=""
      type="text"
      >

      <label for="com-price">
        金額
      </label>
      <input
      id="price"
      name="price[${index}]"
      class="price {{ $errors->has('price[${index}]') ? 'is-invalid' : '' }}"
      value=""
      type="text"
      >

      <label for="description">
          商品紹介
      </label>
      <textarea
          id="description"
          name="description[${index}]"
          class="com-description"
          rows="4"
      ></textarea>

    <input type="button" value="＋" class="add pluralBtn[${index}]">
    <input type="button" value="－" class="del pluralBtn[${index}]">
    <input type="hidden" name="num[${index}]">
    <input type="file" name="image[${index}]">
    </div>`;
    return html;
  }
  var count_value = 0;
  var count_values = 1;
  $(document).on("click", ".add", function() {
    count_value++;
    count_values++;
    document.getElementById("press-button").innerHTML = count_values;
    var hoge = document.getElementById('input_pluralBox').dataset.index;
    var hoga = hoge.innerHTML = count_value;
    $('#input_pluralBox').append(buildFileField(hoga));
    $('input[name^=name]').filter(function(index){
      $(this).attr('name','name['+index+']') 
    });
    $('input[name^=price]').filter(function(index){ 
      $(this).attr('name','price['+index+']') 
    });
    $('testarea[name^=description]').filter(function(index){ 
      $(this).attr('name','description['+index+']') 
    });
    $('input[name^=num]').filter(function(index){ 
      $(this).attr('name','num['+index+']') 
    });
    $('input[name^=image]').filter(function(index){ 
      $(this).attr('name','image['+index+']') 
    });
  });
  $(document).on("click", ".del", function() {
      if (count_values > 1) {
        count_values--;
        document.getElementById("press-button").innerHTML = count_values;
        $(this).parent().remove();
        $('input[name^=name]').filter(function(index){
          $(this).attr('name','name['+index+']') 
        });
        $('input[name^=price]').filter(function(index){ 
          $(this).attr('name','price['+index+']') 
        });
        $('textarea[name^=description]').filter(function(index){ 
          $(this).attr('name','description['+index+']') 
        });
        $('input[name^=num]').filter(function(index){ 
          $(this).attr('name','num['+index+']') 
        });
        $('input[name^=image]').filter(function(index){ 
          $(this).attr('name','image['+index+']') 
        });
      }
  });
  $(document).on("click", ".backg", function() {
    $(".py-4").css("color", "#0000FF");
  });
});