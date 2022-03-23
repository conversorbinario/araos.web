<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Avistamento;
use App\Models\Tipo_ave;

class IndividuoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "sexo" => $this->faker()->name(),
            "plumaje" => $this->faker->randomElement(['male', 'female']),
            "avistamento_id" => 1,
            "tipo_ave_id" => Tipo_ave::all()->random()->id,   
            "created_at" => now(),
            "updated_at" => now(),   
        ];
    }
}
