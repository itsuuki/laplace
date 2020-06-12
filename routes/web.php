<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostController@index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/User/Shop/create', 'ShopController@create');
Route::get('/User/Shop/edit', 'ShopController@edit');
Route::get('/User/{$id}', 'UserController@show');
Route::get('/Shop/{$id}', 'ShopController@show')->name('shop.show');
Route::get('/Shop/{$id}/edit', 'ShopController@edit');
Route::post('/Shop/update', 'ShopController@update');
Route::get('/Shop', 'ShopController@destroy');
Route::get('/Home/search', 'HomeController@search')->name('home.search');;;
Route::get('/Shop/{shop_id}/review/create', function (App\Shop $shop_id) {
  return view('review.create', ['shop_id'=>$shop_id]);
});
// Route::get('/Shop/{shop_id}/reservation/create', function (App\Shop $shop_id) {
//   return view('reservation.create', ['shop_id'=>$shop_id]);
// });
Route::get('/Shop/{shop_id}/Reservation/create', 'ReservationController@create');
Route::get('/Shop/{shop_id}/Commodity/create', 'CommodityController@create');
Route::get('User/Post/all', 'PostController@all');
Route::delete('Post/destroy/{$id}', 'PostController@destroy');
Route::get('User/{id}/Reservation/show', 'ReservationController@show');
Route::get('Shop/{$id}/Reservation', 'ReservationController@index');
Route::post('Shop/{shop}/favorites', 'FavoriteController@store')->name('favorites');
Route::post('Shop/{shop}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');
Route::resource('User', 'UserController');
Route::resource('Shop', 'ShopController');
Route::resource('Post', 'PostController');
Route::resource('Review', 'ReviewController');
Route::resource('Shop.favorite', 'FavoriteController');
Route::resource('Shop.Reservation', 'ReservationController');
Route::resource('User.Reservation', 'ReservationController');
Route::resource('Reservation', 'ReservationController');
Route::resource('Shop.Commodity', 'CommodityController');
Route::resource('Commodity', 'CommodityController');