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
                'image_id' => 1,
                'category_id' => 1,

            ],
            [
                'name' => 'sofa',
                'description' => 'a new sofa',
                'image_id' => 2,
                'category_id' => 2,
            ],

        ]);
    }
}
