<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Image;

use App\User;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $shops = Shop::all();
        $images = Image::all();
        $user = User::all();
        return view('post.index', ['posts' => $posts, 'shops' => $shops, 'images'=> $images, 'user'=>$user]);
    }
}
