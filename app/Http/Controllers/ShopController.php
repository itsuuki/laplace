<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Shop;

use App\Image;

use App\Commodity;

use App\Review;

use App\User;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop/index');
    }

    public function create()
    {
        return view('shop/create');
    }

    public function store(Request $request)
    {
        $value = new Shop;

        $i = 0;

        $value->sname = $request->input('sname');

        $value->sprice = $request->input('sprice');

        $value->region = $request->input('region');

        $value->photo = $request->input('photo');

        $value->datail = $request->input('datail');

        $value->store_in = $request->input('store_in');

        $value->take_out = $request->input('take_out');

        $value->delivery = $request->input('delivery');

        $value->user_id = $request->user()->id;
        
        $value->save();

        $img = new Image;

        $img->image = $request->img->store('public/images');

        $img->shop_id = $value->id;

        $img->save();

        // $commodity->name = $request->input('name');

        // $commodity->price = $request->input('price');

        // $commodity->description = $request->input('description');
        // $commodity->shop_id = $value->id;
        
        // $commodity->save();

        foreach ($request->num as $val) {
            $com = new Commodity;
            $image = new Image;
            echo var_dump($request->image[$i]);
            $com->name = $request->name[$i];
            $com->price = $request->price[$i];
            $com->description = $request->description[$i];
            $com->user_id = $request->user()->id;
            $com->shop_id = $value->id;
            $com->save();
            // $image->image = $request->input('images')->store('public/images');
            $image->image = $request->image[$i]->store('public/images');
            // $image->shop_id = $value->id;
            $image->commodity_id = $com->id;
            $image->save();
            $i++;
        }


        // $value->save();


        // $commodity->save();

        return redirect('/home');
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        $reviews = Review::all();
        $review = Review::select('evaluation')->get();
        $review = collect($review)->avg('evaluation');
        $users = User::all();
        return view('shop.show', ['shop' => $shop, 'review' => $review, 'reviews' => $reviews, 'users' => $users]);
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        $commodity = Commodity::where('shop_id', $id)->get();
        $image = Image::where('shop_id', $id)->get();
        $images = array();
        $commodity_id = $commodity->pluck('id');
        foreach ($commodity_id as $com_id) {
            $img = Image::where('commodity_id', $com_id)->get();
            array_push($images,$img);
            // echo var_dump(Image::where('id', $com_id)->get());
        }
        $commodities = collect($commodity)->count();
        return view('shop.edit', ['shop' => $shop, 'commodity' => $commodity,'commodities' => $commodities, 'image' => $image, 'images' => $images]);
    }

    public function update(Request $request)
    {
        $i = 0;
        $value = Shop::findOrFail($request->id);
        $value->fill($request->all())->save();
        $img = Image::find($request->id);
        $img->image = $request->img->store('public/images');
        $img->shop_id = $value->id;
        $img->save();
        foreach ($request->num as $val) {
            $com = Commodity::find($val);
            $image= Image::find($val);
            // echo var_dump($com);
            $com->name = $request->name[$i];
            $com->price = $request->price[$i];
            $com->description = $request->description[$i];
            $com->user_id = $request->user()->id;
            $com->shop_id = $request->id;
            $com->save();
            $image->image = $request->image[$i]->store('public/images');
            $image->shop_id = $value->id;
            $image->commodity_id = $com->id;
            $image->save();
            $i++;
        }
        $reviews = Review::all();
        $review = Review::select('evaluation')->get();
        $review = collect($review)->avg('evaluation');
        return view('shop.show', ['shop' => $value, 'review' => $review, 'reviews' => $reviews]);
    }

    public function destroy($id)
    {
        // echo var_dump($id);
        $post = Commodity::findOrFail($id);
        $post->delete();
        $posts = Commodity::all();
        $images = Image::all();
        return view('post.all', ['posts' => $posts, 'images'=> $images]);
    }
}