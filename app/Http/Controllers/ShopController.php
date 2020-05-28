<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Shop;

use App\Image;

use App\Commodity;

use App\Review;

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

        $commodity = new Commodity;

        // $user = new User;

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
        $commodity->name = $request->input('name');

        $commodity->price = $request->input('price');

        $commodity->description = $request->input('description');
        $commodity->shop_id = $value->id;
        
        $commodity->save();

        $image->image = $request->file('image')->store('public/images');
        
        $image->shop_id = $value->id;

        $image->commodity_id = $commodity->id;
        
        // $user->shop_id = $value->id;
        
        // $value->shop_id = $image->id;

        // echo var_dump($value);

        $value->save();

        $image->save();

        $commodity->save();


        // $user->save();

        return redirect('/home');
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        $reviews = Review::all();
        $review = Review::select('evaluation')->get();
        $review = collect($review)->avg('evaluation');
        return view('shop.show', ['shop' => $shop, 'review' => $review, 'reviews' => $reviews]);
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shop.edit', ['shop' => $shop]);
    }

    public function update(Request $request)
    {
    
        $value = Shop::findOrFail($request->id);
        
        
        $value->fill($request->all())->save();
        return view('shop.show', ['shop' => $value]);
        // return redirect('/home');
        // $image = Image::findOrFail($request->id);
        // echo var_dump($image);

        $commodity = Commodity::updateOrCreate(
            
        );

        // $user = new User;

        // $value->name = $request->input('name');
        
        // $value->price = $request->input('price');

        // $value->region = $request->input('region');

        // $value->photo = $request->input('photo');

        // $value->datail = $request->input('datail');

        // $value->store_in = $request->input('store_in');

        // $value->take_out = $request->input('take_out');

        // $value->delivery = $request->input('delivery');

        // $value->user_id = $request->user()->id;
        
        // $value->save();

        // $commodity->name = $request->input('name');

        // $commodity->price = $request->input('price');

        // $commodity->description = $request->input('description');

        // $commodity->shop_id = $value->id;
        
        // $commodity->save();

        // $image->image = $request->file('image')->store('public/images');
        
        // $image->shop_id = $value->id;

        // $image->commodity_id = $commodity->id;
        
        // $value->save();

        // $image->save();

        // $commodity->save();

        // echo var_dump($value);
        // $shop = Shop::findOrFail($id);
        // return view('shop.show', ['shop' => $shop]);
    }
}
// return view('shop.show', ['shop' => $shop]);