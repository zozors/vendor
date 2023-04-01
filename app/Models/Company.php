<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $guarded = array('id');

    // 関連するproductsテーブルデータを取得
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'company_id');
    }
}
