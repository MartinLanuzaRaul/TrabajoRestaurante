<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaDeliveryController;
use App\Http\Controllers\PedidoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Inicio');
})->name('inicio');

//Platos 
Route::get('/platos', [PlatoController::class,'indice'])->name('rutaIndicePlato');

Route::get('/usuarios/añadirPlato/{id}', [PlatoController::class,'añadirPlato'])->name('rutaAñadirPlato');

//Clientes
Route::get('/formulario', [EmpresaDeliveryController::class,'formulario'])->name('rutaFormularioCliente');
Route::post('/add', [ClienteController::class,'add'])->name('addCliente');

//Empresas
Route::get('/empresas', [EmpresaDeliveryController::class,'indice'])->name('rutaIndiceEmpresaDelivery');

//Pedidos
Route::get('/pedidos', [PedidoController::class,'indice'])->name('rutaIndicePedido');
Route::get('/finpedido', [PedidoController::class,'finPedido'])->name('rutaFinPedido');
Route::get('/calcular-precio/{precio}', [PedidoController::class, 'calcularPrecio'])->name('calcularPrecioPedido');
