$(function(){
  const buildFileField = (index)=> {
    const html = 
    `<div class="com-data" data-index="${index}">
    <label for="com-name">
      商品
    </label>
    <input
    id="com-name"
    name="com-name"
    class="com-name"
    value="{{ old('com-name') }}"
    type="text"
    >

    <label for="com-price">
      金額
    </label>
    <input
    id="com-price"
    name="com-price"
    class="com-price"
    value="{{ old('com-price') }}"
    type="text"
    >

    <label for="description">
        商品紹介
    </label>
    <textarea
        id="description"
        name="description"
        class="com-description"
        rows="4"
    >{{ old('description') }}</textarea>

    <div class="con">追加</div>

    </div>
    </div>
    </div>
      <div class="exhibition__detail__des__cou__tag">削除</div>
    </div>`;
    return html;
  }

  const buildImg = (index, url)=> {
    const html = `<img data-index="${index}" src="${url}" width="100px" height="100px">`;
    return html;
  }

  let fileIndex = [1,2,3,4,5,6,7,8,9,10];

  lastIndex = $('.com-data:last').data('index');
  fileIndex.splice(0, lastIndex);

  $('.hidden-destroy').hide();
  $('.con').on('click', function(e) {
    console.log("ok");
    const targetIndex = $(this).parent().data('index');
    const file = e.target.files[0];
    const blobUrl = window.URL.createObjectURL(file);
    if (img = $(`img[data-index="${targetIndex}"]`)[0]) {
      img.setAttribute('images', blobUrl);
    } else {  
      $('.b').append(buildImg(targetIndex, blobUrl));
      $('.a').append(buildFileField(fileIndex[0]));
      fileIndex.shift();
      fileIndex.push(fileIndex[fileIndex.length - 1] + 1);
    }
  });

  $('.exhibition__detail__image__in__fis').on('click', '.exhibition__detail__des__cou__tag', function() {
    const targetIndex = $(this).parent().data('index');
    const hiddenCheck = $(`input[data-index="${targetIndex}"].hidden-destroy`);
    if (hiddenCheck) hiddenCheck.prop('checked', true);
    $(this).parent().remove();
    $(`img[data-index="${targetIndex}"]`).remove();
    if ($('.exhibition__detail__image__in__fis__out__ind__fil').length == 0) $('.exhibition__detail__image__in__fis').append(buildFileField(fileIndex[0]));
  });
});
// $(function() {
//   // alert('sample');
//   $('.con').on('click', function(e) {
//     console.log("ok");
//   });
//   // console.log("ok");
// });