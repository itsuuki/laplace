<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Image;

use App\User;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $shops = Shop::orderBy('created_at', 'desc')->get();
        $images = Image::all();
        $user = User::all();
        return view('post.index', ['shops' => $shops, 'images'=> $images, 'user'=>$user]);
        // return view('post/index');
    }

    public function create()
    {
        $shops = Shop::all();
        return view('post/create', ['shops' => $shops]);
    }

    public function store(Request $request)
    {
        $post = new Post;

        $image = new Image;

        $post->post = $request->input('post');

        $post->user_id = $request->user()->id;

        $post->shop_id = $request->input('shop_n');

        $post->save();

        $image->image = $request->file('image')->store('public/images');

        $image->post_id = $post->id;

        $image->save();

        return redirect('/home');
    }

    public function all()
    {
        $posts = Post::all();
        $images = Image::all();

        return view('post.all', ['posts' => $posts, 'images'=> $images]);
    }

    public function destroy($post_id)
    {
        
        // echo var_dump($post_id);
        $post = Post::findOrFail($post_id);
        $post->delete();
        $posts = Post::all();
        $images = Image::all();
        return view('post.all', ['posts' => $posts, 'images'=> $images]);
    }
}

// with('Shop:name')->get();