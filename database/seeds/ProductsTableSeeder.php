<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'company_id' => 1,
            'product_name' => 'コーラ',
            'price' => 120,
            'stock' => 5,
            'comment' => '炭酸',
            'img_path' => base64_encode(Storage::get('Coke.jpg')),
        ];
        DB::table('products')->insert($param);
        $param = [
            'id' => 2,
            'company_id' => 1,
            'product_name' => 'スプライト',
            'price' => 150,
            'stock' => 10,
            'comment' => '炭酸',
            'img_path' => base64_encode(Storage::get('Sprite.jpg')),
        ];
        DB::table('products')->insert($param);
        $param = [
            'id' => 3,
            'company_id' => 2,
            'product_name' => '烏龍茶',
            'price' => 100,
            'stock' => 20,
            'comment' => 'ノンカフェイン',
            'img_path' => base64_encode(Storage::get('OolongTea.jpg')),
        ];
        DB::table('products')->insert($param);
        $param = [
            'id' => 4,
            'company_id' => 2,
            'product_name' => 'ペプシ',
            'price' => 120,
            'stock' => 5,
            'comment' => '炭酸',
            'img_path' => base64_encode(Storage::get('Pepsi.jpg')),
        ];
        DB::table('products')->insert($param);
    }
}
