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
        $posts = Post::orderBy('created_at', 'desc')->get();
        $shops = Shop::all();
        $images = Image::all();
        $user = User::all();
        return view('post.index', ['posts' => $posts, 'shops' => $shops, 'images'=> $images, 'user'=>$user]);
    }

    public function create()
    {
        $shops = Shop::all();
        return view('post/create', ['shops' => $shops]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post' => 'required|max:200',
            // 'image' => 'required',
        ],
        [
            'post.required' => '投稿内容は必須です。',
        ]);

        $post = new Post;

        $l= 0;

        $post->post = $request->input('post');

        $post->user_id = $request->user()->id;

        $post->shop_id = $request->input('shop_n');

        $post->save();

        foreach ($request->nums as $val) {
            if ($request->img !== null) {
            $img = new Image;

            $img->image = $request->img[$l]->store('images');

            $img->post_id = $post->id;

            $img->save();
            }
            $l++;
        }
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

    public function search(Request $request){
        $keyword = $request->input('keyword');
        $query = Shop::all();
        $query->where('sname','like','%'.$keyword.'%');
        $shops = $query->get();
        echo var_dump($shops);


    }
}

