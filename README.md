<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## usersテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false|
|password|integer|null: false|
|shop_id|integer|null: false, foreign_key: true|
|favorite_id|integer|null: false, foreign_key: true|
|reservation_id|integer|null: false, foreign_key: true|
|post_id|integer|null: false, foreign_key: true|
|credit_id|integer|null: false, foreign_key: true|
|review_id|integer|null: false, foreign_key: true|
|post_id|integer|null: false, foreign_key: true|


### Association
- has_many shops
- has_many reviews
- has_many credits
- has_many reservations
- has_many favorites
- has_many posts
- has_many commodities, throuth: :favorites	
- has_many shops throuth reviews



## shopsテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|price|integer|null: false|
|region|string|null: false|
|store_in|string|null: false|
|take_out|string|null: false|
|delivery|string|null: false|
|user_id|integer|null: false, foreign_key: true|
|image_id|integer|null: false, foreign_key: true|
|commodity_id|integer|null: false, foreign_key: true|
|post_id|integer|null: false, foreign_key: true|


### Association
- has_many commodities
- has_many images
- has_many reviews
- has_many posts
- belongs_to :user
- belongs_to :reservation
- has_many users throuth reviews


## commoditiesテーブル
|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|price|string|null: false|
|description|text|
|user_id|integer|null: false, foreign_key: true|
|shop_id|integer|null: false, foreign_key: true|
|image_id|integer|null: false, foreign_key: true|
|favorite_id|integer|null: false, foreign_key: true|


### Association
- has_many images
- has_many reservations
- belongs_to :user
- belongs_to :shop
- has_many favorites
- has_many users throuth favorites


## imagesテーブル
|Column|Type|Options|
|------|----|-------|
|image|string|
|video|string|
|shop_id|integer|null: false, foreign_key: true|
|commodity_id|integer|null: false, foreign_key: true|
|reservation_id|integer|null: false, foreign_key: true|


### Association
- belongs_to :shop
- belongs_to :commodity
- belongs_to :reservation


## creditsテーブル
|Column|Type|Options|
|------|----|-------|
|credit|string|null: false|
|user_id|integer|null: false, foreign_key: true|


### Association
- belongs_to :user


## reservationsテーブル
|Column|Type|Options|
|------|----|-------|
|remark|text|
|user_id|integer|null: false, foreign_key: true|
|shop_id|integer|null: false, foreign_key: true|
|commodity_id|integer|null: false, foreign_key: true|
|image_id|integer|null: false, foreign_key: true|


### Association
- has_many shops
- has_many images
- belongs_to :user
- belongs_to :commodity


## reviewsテーブル
|Column|Type|Options|
|------|----|-------|
|evaluation|text|null: false|
|detail|text|
|user_id|integer|null: false, foreign_key: true|
|shop_id|integer|null: false, foreign_key: true|


### Association
- belongs_to :user
- belongs_to :shop


## favoritesテーブル
|Column|Type|Options|
|------|----|-------|
|user_id|integer|null: false, foreign_key: true|	
|commodity_id|integer|null: false, foreign_key: true|	


### Association
- belongs_to :user
- belongs_to :commodity


## postsテーブル
|Column|Type|Options|
|------|----|-------|
|post|text|
|user_id|integer|null: false, foreign_key: true|
|shop_id|integer|null: false, foreign_key: true|
|image_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to shop
- has_many images





<!-- ALTER TABLE shops COLLATE utf8mb4_general_ci -->





<!-- $(function(){
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
  $('.a').on('change', '.c', function(e) {
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
}); -->

<!-- <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="/js/jquery-3.5.0.tgz.js"></script> 
<script src="/resource/js/shop.js" defer></script> -->



<!-- <script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script> -->