<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cliente>
 */
class ClienteFactory extends Factory
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
            'telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address(),
            'estado'=>$this->faker->randomElement(
                ['activo', 'no activo'])
        ];
    }
}
