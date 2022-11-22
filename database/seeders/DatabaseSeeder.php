<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            SizeSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ImageSeeder::class,
            ArticleSeeder::class,

            // $this->command->info('Tag Seeder created.')

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
