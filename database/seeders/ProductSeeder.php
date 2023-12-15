<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => '漬物いろいろ',
                'secondary_category_id' => 1,
                'image1' => 1,
            ],
            [
                'shop_id' => 1,
                'name' => '梅干し',
                'secondary_category_id' => 2,
                'image1' => 2,
            ],
            [
                'shop_id' => 2,
                'name' => 'かずのこ',
                'secondary_category_id' => 3,
                'image1' => 3,
            ],
            [
                'shop_id' => 2,
                'name' => 'その他魚卵',
                'secondary_category_id' => 4,
                'image1' => 4,
            ],
            [
                'shop_id' => 2,
                'name' => 'イカ',
                'secondary_category_id' => 5,
                'image1' => 5,
            ],
            [
                'shop_id' => 2,
                'name' => '加工品',
                'secondary_category_id' => 6,
                'image1' => 6,
            ],
        ]);
    }
}
