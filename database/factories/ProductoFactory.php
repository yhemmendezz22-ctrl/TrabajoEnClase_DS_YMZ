<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id'=>Categoria::factory(),
            'codigo' =>$this->faker->unique()->bothify('PRO-####'),
            'nombre'=>$this->faker->sentence(3),
            'descripcion'=>$this->faker->text(),
            'precio'=>$this->faker->randomFloat(2, 500, 15000),
            'stock'=>$this->faker->numberBetween(0,100),
            'estado'=>$this->faker->randomElement(
                ['activo', 'no activo'])
        ];
    }
}
