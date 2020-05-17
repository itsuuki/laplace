<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\User;

class UserController extends Controller
{
    // public function index()
    // {
    //     $shop = Shop::find($shop_id);
    //     return view("user/index", ['shop' => $shop]);
    // }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $shops = Shop::where('user_id', $id)->get();
        return view("user.show", ['user' => $user, 'shops'=> $shops]);
    }
}
// , 'shop'=> $shop
// <a class="user-shop" href="/Show/{{ shop()->id }}">
//       マイページ
//   </a>