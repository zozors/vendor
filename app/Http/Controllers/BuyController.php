<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;
use App\Http\Requests\BuyRequest;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index(Request $request)
    {
        // クエリパラメタから対象の自動販売機を取得
        $company = Company::where('id', $request->id)->first();
        return view('buy.index', ['company' => $company]);
    }

    // public function buy(BuyRequest $request)
    // {
    //     // salesテーブルのmoneyを減らす
    //     Sales::where('id', $request->company_id)->decrement('money', $request->price);
    //     // productsテーブルの在庫を減らす
    //     Products::where('id', $request->id)->decrement('stock', 1);
    //     return redirect('/buy?id=' . $request->company_id);
    // }

    // public function money(Request $request)
    // {
    //     if (isset($_POST['oturi'])) {
    //         // おつり返却処理
    //         // salesテーブルのmoneyを0に更新
    //         Sales::where('id', $request->id)->update(['money'=>0]);
    //     } else {
    //         // 入金処理
    //         $input_money = 0;
    //         if (isset($_POST['10button'])) {
    //             $input_money = 10;
    //         } elseif (isset($_POST['100button'])) {
    //             $input_money = 100;
    //         } elseif (isset($_POST['500button'])) {
    //             $input_money = 500;
    //         } elseif (isset($_POST['1000button'])) {
    //             $input_money = 1000;
    //         }
    //         // salesテーブルのmoneyに加算
    //         Sales::where('id', $request->id)->increment('money', $input_money);
    //     }
    //     return redirect('/buy?id=' . $request->id);
    // }
}

