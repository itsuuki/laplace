<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\DB;

use App\Shop;

use App\User;

use App\Image;

use App\Post;

use App\Reservation;

use App\Commodity;

use App\Favorite;

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

        $reservations = Reservation::where('user_id', $id)->latest()->get();
        $shops_id = $reservations->pluck('shop_id');
        $cc = $reservations->pluck('created_at');
        $shop_id = $shops_id->unique();
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


        // $vc = $reservations->select('id', 'created_at')->get()->groupBy(DB::raw('CAST(created_at AS DATE)'));
        // echo var_dump($vc);


        $favorites = Favorite::where('user_id', $id)->get();
        $favorite_id = $favorites->pluck('shop_id');
        // $judge=array_filter($favorite);
        // echo var_dump($favorite);
        $fav_shops = array();
        if (count($favorite_id) === 0) {
            $fav_shops = null;
        } else {
            foreach ($favorite_id as $favorite) {
                $fav_shop = Shop::where('id', $favorite)->get();
                array_push($fav_shops, $fav_shop);
            }
            // echo var_dump($fav_shop);
        }
        // echo var_dump($fav_shops);
        return view("user.show", ['user' => $user, 'shops'=> $shops, 'id' => $id, 'posts' => $posts, 'images'=> $images, 'commodities' => $commodities, 'reservations' => $reservations, 'res_shops' => $res_shops, 'fav_shops' => $fav_shops]);
        // $commodities = Commodity::all();
    }
}
// , 'shop'=> $shop
// <a class="user-shop" href="/Show/{{ shop()->id }}">
//       マイページ
//   </a>