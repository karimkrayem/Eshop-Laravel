<?php

namespace Database\Factories;

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
        return [
            //

            'name' => $this->faker->word,
            'description' => $this->faker->text($maxNbChars = 200),
            // 'image' => '2',
            'category_id' => $this->faker->numberBetween(1, 5),
            'stock' => $this->faker->numberBetween(0, 7),
            'price' => $this->faker->numberBetween(80, 300),
        ];
    }
}
