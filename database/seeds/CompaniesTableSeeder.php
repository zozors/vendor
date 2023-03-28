<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
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
            'company_name' => 'コカコーラ',
            'street_address' => '東京都渋谷区',
            'representative_name' => 'ジェームズ',
        ];
        DB::table('companies')->insert($param);
        $param = [
            'id' => 2,
            'company_name' => 'サントリー',
            'street_address' => '東京都港区',
            'representative_name' => '新浪',
        ];
        DB::table('companies')->insert($param);
    }
}
