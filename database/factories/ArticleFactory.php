<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        return [



            'title' => $title,
            'content' => $this->faker->text($maxNbChars = 200),
            'src' => $this->faker->imageUrl(width: 620, height: 480),
            'user_id' => $this->faker->numberBetween(1, 4),
            'slug' => $slug,
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
