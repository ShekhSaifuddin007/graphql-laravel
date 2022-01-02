<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 5),
            'title' => $this->faker->word,
            'author' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentences(5, true),
        ];
    }
}
