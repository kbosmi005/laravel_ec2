<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '漬物',
                'sort_order' => 1,
            ],
            [
                'name' => '魚介類・水産加工品',
                'sort_order' => 2,
            ],
            // [
            //     'name' => 'チーズ・乳製品',
            //     'sort_order' => 3,
            // ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '漬物',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '梅干し',
                'sort_order' => 2,
                'primary_category_id' => 1

            ],
            [
                'name' => 'かずのこ',
                'sort_order' => 3,
                'primary_category_id' => 2

            ],
            [
                'name' => 'その他魚卵',
                'sort_order' => 4,
                'primary_category_id' => 2

            ],
            [
                'name' => 'イカ',
                'sort_order' => 5,
                'primary_category_id' => 2

            ],
            [
                'name' => '加工品',
                'sort_order' => 6,
                'primary_category_id' => 2

            ],
        ]);



    }
}
