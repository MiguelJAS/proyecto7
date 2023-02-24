<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TarifaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'diurna' => $this->faker->numberBetween(0, 100),
            'nocturna' => $this->faker->numberBetween(0, 100),
            'festivos' => $this->faker->numberBetween(0, 100),
            'personalizada' => $this->faker->numberBetween(0, 100),
        ];
    }
}
