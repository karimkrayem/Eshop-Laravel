<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'singleProduct' => $this->faker->imageUrl(),
            'productList' => $this->faker->imageUrl(),
            'contact' => $this->faker->imageUrl(),
            'singleBlog' => $this->faker->imageUrl(),
            'account' => $this->faker->imageUrl(),
            'about' => $this->faker->imageUrl(),
            'login' => $this->faker->imageUrl(),
            'checkout' => $this->faker->imageUrl(),

        ];
    }
}
