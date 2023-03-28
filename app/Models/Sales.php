<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    protected $guarded = array('id');

    // 関連するproductsテーブルデータを取得
    public function products()
    {
        return $this->hasMany('App\Products', 'company_id');
    }
}