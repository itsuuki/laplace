<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Image;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $shops = Shop::orderBy('created_at', 'desc')->get();
        $user = User::all();
        $images = Image::all();
        // $id = Shop::select('id')->get();
        // $images = Image::whereIn('shop_id', $id);
        // echo var_dump($id);
        // echo var_dump($images);
        return view('post.index', ['shops' => $shops, 'images'=> $images, 'user'=>$user]);
    }
}
