<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'name' => 'chair',
                'description' => 'an old chair',
                // 'image' => '2',
                'category_id' => 1,

            ],
            [
                'name' => 'sofa',
                'description' => 'a new sofa',
                // 'image' => 'a',
                'category_id' => 2,
            ],

        ]);
    }
}
