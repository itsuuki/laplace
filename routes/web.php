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
Route::resource('User', 'UserController');
Route::resource('Shop', 'ShopController');