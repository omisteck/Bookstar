<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(2, true),
            "image" => null,
            "ingredients" => $this->faker->sentence,
            "description" => $this->faker->paragraph,
            "time" => $this->faker->randomElement(["30min", "1hr"]),
        ];
    }
}
