<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' =>$this->faker->unique()->bothify('CLI-####'), 
            'nombre'=>$this->faker->name(),
            'correo' =>$this->faker->unique()->safeEmail(), 
            'cargo'=>$this->faker->jobTitle(),
            'fecha_contratacion'=>$this->faker->date(),
            'estado'=>$this->faker->randomElement(
                ['activo', 'no activo'])
        ];
    }
}
