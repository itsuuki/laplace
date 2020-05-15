<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Image;

// use App\User;

// use App\Http\Controllers\Auth;

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

        $image = new Image;

        // $user = new User;

        // $user = User::with('shops')->get();

        $value->name = $request->input('name');

        $value->price = $request->input('price');

        $value->region = $request->input('region');

        $value->photo = $request->input('photo');

        $value->datail = $request->input('datail');

        $value->store_in = $request->input('store_in');

        $value->take_out = $request->input('take_out');

        $value->delivery = $request->input('delivery');

        $value->user_id = $request->user()->id;

        $value->save();
        
        $image->image = $request->file('image')->store('images');
        
        $image->shop_id = $value->id;
        
        // $user->shop_id = $value->id;
        
        $value->shop_id = $image->id;

        // $user->user_id = $request->input('User/id');

        // Auth::user()->shops()->createMany([$request->all()]);

        // echo var_dump($value);

        $value->save();

        $image->save();

        // $user->save();

        return view('post/index');
    }

    public function show($shop)
    {
        $shop = Shop::findOrFail($shop_id);
        return view('shop.show', [
            'shop' => $shop,
        ]);
    }

    public function edit($shop_id)
    {
        $shop = Shop::findOrFail($shop_id);
        return view('shop.edit', [
            'shop' => $shop,
        ]);
    }

    public function update()
    {
        return view('shop/index');
    }
}
