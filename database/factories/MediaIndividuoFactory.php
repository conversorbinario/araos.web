<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Individuo;
class MediaIndividuoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "foto_path" => $this->faker->name(),
            "audio_path" => $this->faker->county(),
            "individuo_id" => Individuo::all()->random()->id,
            "created_at" => now(),
            "updated_at" => now(),

        ];
    }
}
