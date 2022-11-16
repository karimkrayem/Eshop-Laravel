<?php

namespace Database\Seeders;

use App\Models\Article;
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
        // Article::factory()->count(10)->create();
        DB::table('articles')->insert([
            [
                'title' => 'chair',
                'content' => 'an old chair',
                'src' => 'a'
                // 'user_id' => 1,

            ],
            [
                'name' => 'sofa',
                'description' => 'a new sofa',
                'src' => 'b'
            ],

        ]);
    }
}
