<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'buy')
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
    // public function rules()
    // {
    //     // お金が足りているかのチェック
    //     $remain = function($attribute, $value, $fail) {
    //         $input_data = $this->all();
    //         if ($input_data['money'] - $input_data['price'] <= 0)
    //         {
    //             $fail('【金額】お金が足りません。');
    //         }
    //     };
    //     // バリデーション
    //     $price_validation = ['required', $remain];
    //     return [
    //         'id'=>'required',
    //         'company_id'=>'required',
    //         'price'=>$price_validation,
    //         'money'=>'required',
    //     ];
    // }

    /**
     * エラーメッセージの定義
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'id.required'=>'【商品ID】商品IDが設定されていません。',
            'company_id.required'=>'【会社ID】会社IDが設定されていません。',
            'price.required'=>'【価格】価格が設定されていません。',
            // 'money.required'=>'【金額】金額が設定されていません。',
        ];
    }
}