<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Image;

use App\User;

class PostController extends Controller
{
    public function index()
    {
        $shops = Shop::orderBy('created_at', 'desc')->get();
        $images = Image::all();
        $user = User::all();
        // echo var_dump($shops);
        return view('post.index', ['shops' => $shops, 'images'=> $images, 'user'=>$user]);
        // return view('post/index');
    }
}

// with('Shop:name')->get();