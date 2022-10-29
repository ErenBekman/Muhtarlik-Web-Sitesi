<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddNewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image(),
            'author' => $this->faker->name(),
            'title' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
        ];
    }
}
