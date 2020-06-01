<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;

use App\Commodity;

use App\Shop;

use App\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        return view('post.all', []);
    }

    public function create($shop_id)
    {
        $commodity = Commodity::where('shop_id', $shop_id)->get();
        $com = $commodity->pluck('id');
        // echo var_dump($com);
        $image = Image::where('commodity_id', $com)->get();
        return view('reservation.create', ['image' => $image, 'commodity' => $commodity, 'shop_id' => $shop_id]);
    }

    public function store(Request $request)
    {
        $req = $request->input('remark');
        echo var_dump($req);
        $reser = new Reservation;

        $reser->remark = $request->input('remark');

        $reser->user_id = $request->user()->id;

        $reser->shop_id = $request->idsss;

        $reser->commodity_id = $request->ids;

        $reser->image_id = $request->idss;



        $reser->save();

        return view('/home');


    }
}
