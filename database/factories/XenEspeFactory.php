<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class XenEspeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Xenero1', 'Xenero2', 'Xenero3', 'Xenero4']),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
