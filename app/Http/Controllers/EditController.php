<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Requests\EditRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class EditController extends Controller
{
    public function index(Request $request)
    {
        // Productテーブルのデータを取得
        $product_list = Product::all();
        return view('edit.index', ['product_list'=>$product_list]);
    }

    public function edit(EditRequest $request)
    {
        // *** INSERT ***
        if (isset($_POST['insert_product'])) {
            $image = base64_encode(file_get_contents($request->image));
            Product::create([
                'id'=>$request->id,
                'company_id'=>$request->company_id,
                'product_name'=>$request->product_name,
                'price'=>$request->price,
                'stock'=>$request->stock,
                'comment'=>$request->comment,
                'img_path'=>$image,
            ]);
        // *** UPDATE ***
        } elseif (isset($_POST['update_product'])) {
            // 更新処理(画像含む)
            if (isset($request->image)) {
                $image = base64_encode(file_get_contents($request->image));
                Product::where('id', $request->id)->update([
                    'id'=>$request->id,
                    'company_id'=>$request->company_id,
                    'product_name'=>$request->product_name,
                    'price'=>$request->price,
                    'stock'=>$request->stock,
                    'comment'=>$request->comment,
                    'img_path'=>$image,
                    ]);
            // 更新処理(画像無し)
            } else {
                Product::where('id', $request->id)->update([
                    'id'=>$request->id,
                    'company_id'=>$request->company_id,
                    'product_name'=>$request->product_name,
                    'price'=>$request->price,
                    'stock'=>$request->stock,
                    'comment'=>$request->comment,
                    ]);
            }
        // *** DELETE ***
        } elseif (isset($_POST['delete_product'])) {
            Product::find($request->id)->delete();
        }
        return redirect('/edit');
    }
}
