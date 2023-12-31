<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            ['name' => 'test',
            'email' => 'test1@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2023/11/16 11:11:11'],

            ['name' => 'test',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2023/11/16 11:11:11'],

            // ['name' => 'test',
            // 'email' => 'test3@test.com',
            // 'password' => Hash::make('password123'),
            // 'created_at' => '2023/11/16 11:11:11'],

            // ['name' => 'test',
            // 'email' => 'test4@test.com',
            // 'password' => Hash::make('password123'),
            // 'created_at' => '2023/11/16 11:11:11'],

            // ['name' => 'test',
            // 'email' => 'test5@test.com',
            // 'password' => Hash::make('password123'),
            // 'created_at' => '2023/11/16 11:11:11'],

            // ['name' => 'test',
            // 'email' => 'test6@test.com',
            // 'password' => Hash::make('password123'),
            // 'created_at' => '2023/11/16 11:11:11'],
        ]);
    }
}
