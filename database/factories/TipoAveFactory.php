<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Xen_espe;
class TipoAveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->name(),
            "caracteristica1" => $this->faker->randomElement(['caracteristicaInventada', 'otracaracteristicaInventada']),
            "caracteristica1" => $this->faker->randomElement(['caracteristicaInventada2', 'otracaracteristicaInventada2']),
            "xenero_esp_id" => Xen_espe::all()->random()->id,
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
