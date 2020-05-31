<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;

use App\Commodity;

use App\Review;

class CommodityController extends Controller
{
    public function create($id)
    {
        // echo var_dump($id);
        return view('commodity/create', ['id' => $id]);
    }

    public function store(Request $request)
    {
        // echo var_dump($request->id);
        $value = Shop::findOrFail($request->id);
        $i = 0;
        foreach ($request->num as $val) {
            // return redirect('/home');
            // $image = Image::findOrFail($request->id);
            // $commodity = Commodity::find($request->id);
            $com = new Commodity;
            // echo var_dump($request->name[$i]);
            
            $com->name = $request->name[$i];

            $com->price = $request->price[$i];

            $com->description = $request->description[$i];

            $com->shop_id = $request->id;
            $com->user_id = $request->user()->id;
            $com->save();
        
            // echo var_dump($value);
            // $commodity = Commodity::where('shop_id', $id)->get();
            // foreach ($commodity as $com) {
                // $com->fill($request->all([$i]))->save();
            // }
            $i++;
        }
        $reviews = Review::all();
        $review = Review::select('evaluation')->get();
        $review = collect($review)->avg('evaluation');
        return redirect()->route('shop.show', ['$id' => $value, 'shop' => $value, 'review' => $review, 'reviews' => $reviews]);
    }

    public function edit()
    {
        return view('shop/index');
    }
}
