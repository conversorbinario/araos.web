<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Lugar;
use app\Models\User;

class AvistamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "coor_id" => Lugar::all()->random()->id,
            "user_id" => User::all()->random()->id,
            "created_at" => now(),
            "updated_at" => now(),        
        ];
    }
}
