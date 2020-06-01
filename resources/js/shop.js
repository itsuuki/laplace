$(function(){
  const buildFileField = (index)=> {
    const html = `<div id="input_plural" class="input_plural[${index}]">
      <label for="com-name">
        商品
      </label>
      <input
      id="name"
      name="name[${index}]"
      class="name"
      value=""
      type="text"
      >

      <label for="com-price">
        金額
      </label>
      <input
      id="price"
      name="price[${index}]"
      class="price"
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
    </div>`;
    return html;
  }
  var count_value = 0;
  var count_values = 1;
  $(document).on("click", ".add", function() {
    console.log('ok');
    // $.ajax({
    //   url: "resource/views/commodity/create.blade.php",
    //   type: 'GET',
    //   data: { "data-index='1'": hoga },
    //   // $(this).parent().clone(true).insertAfter($(this).parent());
    // })
      count_value++;
      count_values++;
      document.getElementById("press-button").innerHTML = count_values;
      var hoge = document.getElementById('input_pluralBox').dataset.index;
      var hoga = hoge.innerHTML = count_value;
      $('#input_pluralBox').append(buildFileField(hoga));
      console.log(hoga);
  // $("#input_pluralBox").append()
  //     $('#input_plura').append(``)

  });
  $(document).on("click", ".del", function() {
    // var target = $(this).parent();
    const targetIndex = $(this).index(".del");
    console.log(targetIndex);
    // var a = document.('#name').index();
    // if (target.parent().children().length > 1) {
      //     target.remove();
      if (count_values > 1) {
        count_values--;
        document.getElementById("press-button").innerHTML = count_values;
        // var hoge = document.getElementById('input_pluralBox').dataset.index;
        // var hoga = hoge.innerHTML = count_value;
        // buildFileField(targetIndex).remove()
        // console.log(buildFileField(targetIndex))
        $(this).parent().remove();
      // var s = $(buildFileField(targetIndex)).prop('checked', true)
      // s.remove();
      // console.log(s);
      // console.log(remove(':contains("buildFileField(targetIndex)")'));
      // $(`price[${targetIndex}]`).remove();
      // $(`description[${targetIndex}]`).remove();
      // $(`add pluralBtn[${targetIndex}]`).remove();
      // $(`del pluralBtn[${targetIndex}]`).remove();
      // console.log(hoga)
    }
  });
});