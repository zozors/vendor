<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
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
            'product_id' => 1,
        ];
        DB::table('sales')->insert($param);
        $param = [
            'id' => 2,
            'product_id' => 2,
        ];
        DB::table('sales')->insert($param);
    }
}
