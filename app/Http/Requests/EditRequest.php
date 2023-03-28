<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'edit')
        {
            return true;
        }
        return false;
    }

    /**
     * バリデーションルールの定義
     *
     * @return array
     */
    public function rules()
    {
        // 登録処理のみ画像設定チェックを実施
        if (isset($_POST['insert_product'])) {
            $image_validation = ['required'];
        } else {
            $image_validation = [];
        }
        // バリデーション
        return [
            'id'=>'required|digits_between:1,100',
            'company_id'=>'required|digits_between:1,100',
            'product_name'=>'required',
            'price'=>'required|digits_between:1,1000',
            'stock'=>'required|digits_between:0,100',
            'comment'=>'digits_between:1,100',
            'image'=>$image_validation,
        ];
    }

    /**
     * エラーメッセージの定義
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'id.required'=>'【商品ID】商品IDを入力してください。',
            'id.digits_between'=>'【商品ID】商品IDには1以上、100以下の数字を入力してください。',
            'company_id.required'=>'【会社ID】会社IDを入力してください。',
            'id.digits_between'=>'【会社ID】会社IDには1以上、100以下の数字を入力してください。',
            'product_name.required'=>'【商品名】商品名を入力してください。',
            'price.required'=>'【価格】価格を入力してください。',
            'price.digits_between'=>'【価格】価格には1円以上、1000円以下の数字を入力してください。',
            'stock.required'=>'【在庫】在庫を入力してください。',
            'stock.digits_between'=>'【在庫】在庫には0個以上、100個以下の数字を入力してください。',
            'comment.digits_between'=>'【コメント】コメントは1文字以上、100文字以下の文字を入力してください。',
            'image.required'=>'【画像】画像を設定してください。',
        ];
    }
}
