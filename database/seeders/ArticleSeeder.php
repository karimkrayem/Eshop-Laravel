<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'chair',
                'content' => 'an old chair',
                // 'user_id' => 1,

            ],
            [
                'name' => 'sofa',
                'description' => 'a new sofa',
                // 'user_id' => 2,
            ],
        ]);
    }
}
