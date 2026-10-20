<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categorias = Categoria::factory()->count(15)->create();
        $clientes   = Cliente::factory()->count(15)->create();
        $empleados  = Empleado::factory()->count(15)->create();

        Pedido::factory()
        ->count(15)
        ->create([
            'cliente_id'  => fn () => $clientes->random()->id,
            'empleado_id' => fn () => $empleados->random()->id,
        ]);

        Producto::factory()
        ->count(15)
        ->create([
            'categoria_id' => fn () => $categorias->random()->id,
        ]);


    }
}
