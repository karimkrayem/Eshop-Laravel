<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            [
                'name' => 'chair',
                'description' => 'an old chair',
                'src' => 'yo',
                'category_id' => 1,
            ],
            [
                'name' => 'sofa',
                'description' => 'a new sofa',
                'src' => 'yo',
                'category_id' => 2,
            ],

        ]);
    }
}
