<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LugarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "coordenadas" => $this->faker->name(),
            "concello" => $this->faker->county(),
            "created_at" => now(),
            "updated_at" => now(),


        ];
    }
}
