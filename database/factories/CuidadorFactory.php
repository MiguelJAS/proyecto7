<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuidadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Factory hecha, pero no podemos utilizarla.
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'dni' => $this->faker->regexify('/^[0-9]{8}[A-Z]$/'),
            'email' => $this->faker->email(),
            'Domicilio' => $this->faker->word(),
            'Comunidad' => $this->faker->country(),
        ];
    }
}
