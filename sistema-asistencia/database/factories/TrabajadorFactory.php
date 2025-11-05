<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->faker->unique()->numerify('########'),
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'cargo' => $this->faker->randomElement(['administrativo', 'docente', 'personal de limpieza']),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'id_tipo_trabajador' => \App\Models\TipoTrabajador::factory(),
        ];
    }
}
