<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente_id'=> Cliente::factory(), 
            'empleado_id'=> Empleado::factory(),
            'numero_pedido'=>$this->faker->unique()->bothify('PED-####'),
            'fecha_pedido'=>$this->faker->date(),
            'fecha_entrega'=>$this->faker->optional()->date(),
            'total'=>$this->faker->randomFloat(2, 1000, 50000),
            'observaciones'=>$this->faker->optional()->text(),
            'estado'=>$this->faker->randomElement(
                ['entregado', 'pendiente', 'cancelado'])
        ];
    }
}
