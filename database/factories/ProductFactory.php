<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            //

            'name' => $title,
            'description' => $this->faker->text($maxNbChars = 200),
            'category_id' => $this->faker->numberBetween(1, 5),
            'size_id' => $this->faker->numberBetween(1, 5),
            'stock' => $this->faker->numberBetween(0, 7),
            'slug' => $slug,
            // 'user_id' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->numberBetween(80, 300),
        ];
    }
}
