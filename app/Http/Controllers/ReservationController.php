<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;

use App\Commodity;

use App\Shop;

use App\User;

use App\Reservation;

class ReservationController extends Controller
{
    

    public function create($shop_id)
    {
        $commodity = Commodity::where('shop_id', $shop_id)->get();
        $coms = $commodity->pluck('id');
        // echo var_dump($coms);
        $commodities = collect($commodity)->count();
        $image = Image::where('commodity_id', $coms)->get();
        return view('reservation.create', ['image' => $image, 'commodity' => $commodity, 'shop_id' => $shop_id, 'commodities' => $commodities, 'coms' => $coms]);
    }

    public function store(Request $request)
    {
        // $req = $request->input('remark');
        $i = 0;
        foreach ($request->num as $val) {
            // echo var_dump($request->ids);
            $reser = new Reservation;
            $reser->remark = $request->remark[$i];
            // $com->name = $request->name[$i];
            $reser->user_id = $request->user()->id;
            $reser->shop_id = $request->idsss;
            $reser->commodity_id = $request->ids[$i];
            $reser->save();
            $i++;
        }
        // $reser->save();
        return redirect('/home');
    }

    public function show($id)
    {
        $reservations = Reservation::where('user_id', $id)->get();
        $shop_id = $reservations->pluck('shop_id');
        $shops = array();
        foreach ($shop_id as $sh_id) {
            $shop = Shop::where('id', $sh_id)->get();
            array_push($shops,$shop);
        }
        $commodities = array();
        $images = array();
        $commodity_id = $reservations->pluck('commodity_id');
        foreach ($commodity_id as $com_id) {
            $commodity = Commodity::where('id', $com_id)->get();
            $image = Image::where('commodity_id', $com_id)->get();
            array_push($commodities,$commodity);
            array_push($images,$image);
        }
        return view('reservation/order', ['reservations' => $reservations, 'shops' => $shops, 'commodities' => $commodities, 'images' => $images]);
    }

    public function index($id)
    {
        // echo var_dump($id);
        $reservations = Reservation::where('shop_id', $id)->get();
        $commodities = array();
        $images = array();
        $commodity_id = $reservations->pluck('commodity_id');
        foreach ($commodity_id as $com_id) {
            $commodity = Commodity::where('id', $com_id)->get();
            $image = Image::where('commodity_id', $com_id)->get();
            array_push($commodities,$commodity);
            array_push($images,$image);
        }
        return view('reservation/index', ['reservations' => $reservations, 'commodities' => $commodities, 'images' => $images]);
    }
}
