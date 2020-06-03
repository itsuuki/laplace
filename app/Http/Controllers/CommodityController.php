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
        return view('commodity/create', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $value = Shop::findOrFail($request->id);
        $i = 0;
        foreach ($request->num as $val) {
            $com = new Commodity;
            $com->name = $request->name[$i];
            $com->price = $request->price[$i];
            $com->description = $request->description[$i];
            $com->shop_id = $request->id;
            $com->user_id = $request->user()->id;
            $com->save();
            $i++;
        }
            $reviews = Review::all();
            $review = Review::select('evaluation')->get();
            $review = collect($review)->avg('evaluation');
            return redirect()->route('shop.show', ['$id' => $value, 'shop' => $value, 'review' => $review, 'reviews' => $reviews]);
    }
        
        // $collection = collect($request);
        // // foreach ($request as $val) {
        // $sorted = $collection->sortByDesc('name')->values();
        // echo var_dump($sorted);
        // }
        public function edit()
        {
            return view('shop/index');
        }
        
    // public function beforeFilter(): void {
        //     parent::beforeFilter();

    //     // Ajax通信の為セキュリティを解除
    //     $this->Security->unlockedActions = ['fetchDBData'];
    // }

    // /**
    //  * 入力されたIDを元にAjaxで名前を取得するpublic関数
    //  */
    // public function fetchDBData() {
        //     // 表示はせずにデータをやりとりする関数なのでView不要の記述
        //     $this->autoRender = false;

    //     if ($this->RequestHandler->isAjax()) {
    //         if ($this->request->data) {
    //             $inputId = Hash::get($this->request->data, 'input_id');
    //         }

    //         $inputName = $this->Fuga->getFugaName($inputId);
    //         if (strlen($inputName) === 0) {
    //             return '※存在しません';
    //         } else {
    //             return $inputName;
    //         }
}
    //     }
    // }
