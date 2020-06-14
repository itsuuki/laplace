<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\User;

use App\Image;

use App\Post;

use App\Reservation;

use App\Commodity;

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

        $posts = Post::where('user_id', $id)->get();
        $image_id = $posts->pluck('id');
        // echo var_dump($posts);
        $images = array();
        foreach ($image_id as $img_id) {
            $image =Image::where('post_id', $img_id)->get();
            array_push($images,$image);
        }

        $reservations = Reservation::where('user_id', $id)->get();
        $shop_id = $reservations->pluck('shop_id');
        $res_shops = array();
        foreach ($shop_id as $sh_id) {
            $shop = Shop::where('id', $sh_id)->get();
            array_push($res_shops,$shop);
        }
        $commodities = array();
        $commodity_id = $reservations->pluck('commodity_id');
        foreach ($commodity_id as $com_id) {
            $commodity = Commodity::where('id', $com_id)->get();
            array_push($commodities,$commodity);
        }
        return view("user.show", ['user' => $user, 'shops'=> $shops, 'id' => $id, 'posts' => $posts, 'images'=> $images, 'commodities' => $commodities, 'reservations' => $reservations, 'res_shops' => $res_shops]);
    }
}
// , 'shop'=> $shop
// <a class="user-shop" href="/Show/{{ shop()->id }}">
//       マイページ
//   </a>