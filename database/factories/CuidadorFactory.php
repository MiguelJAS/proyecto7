<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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

        //$user = User::factory()->create();
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            //'user_id'=>$user->id,
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'telefono' => $this->faker->numerify('#########'),
            'dni' => $this->faker->regexify('/^[0-9]{8}[A-Z]$/'),
            'email' => $this->faker->email(),
            'Domicilio' => $this->faker->word(),
            'Comunidad' => $this->faker->country(),

        ];
    }
}
