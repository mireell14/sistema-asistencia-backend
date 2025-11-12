<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->date(),
            'hora_entrada' => $this->faker->time(),
            'hora_salida' => $this->faker->time(),
            'estado' => $this->faker->randomElement(['presente', 'ausente', 'tarde']),
            'observacion' => $this->faker->sentence(),
            'id_student' => \App\Models\Student::factory(),
            'id_trabajador' => \App\Models\Trabajador::factory(),                   
            //
        
        ];
    }
}
