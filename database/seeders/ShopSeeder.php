<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
        [
            'owner_id' => 1,
            'name' => '漬物専門店',
            'information' => '創業１２００年の漬物専門店です。',
            'filename' => 'tukemon.jpg',
            'is_selling' => true
        ],
        [
            'owner_id' => 2,
            'name' => '海の幸屋',
            'information' => '魚卵、イカ、加工品に特化しています！！',
            'filename' => 'seafoodshop.jpg',
            'is_selling' => true
        ],
    ]);
    }
}
