<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/productos', [CategoriaController::class, 'productos']);
Route::get('/categorias/con-productos', [CategoriaController::class, 'conProductos']);

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/pedidos', [ClienteController::class, 'pedidos']);
Route::get('/clientes/con-pedidos', [ClienteController::class, 'conPedidos']);

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/pedidos', [EmpleadoController::class, 'pedidos']);
Route::get('/empleados/con-pedidos', [EmpleadoController::class, 'conPedidos']);

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/categoria', [ProductoController::class, 'categoria']);
Route::get('/productos/con-categoria', [ProductoController::class, 'conCategoria']);

Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/cliente', [PedidoController::class, 'cliente']);
Route::get('/pedidos/empleado', [PedidoController::class, 'empleado']);
Route::get('/pedidos/con-relaciones', [PedidoController::class, 'conRelaciones']);
