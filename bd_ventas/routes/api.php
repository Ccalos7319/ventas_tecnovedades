<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DetalleingresoController;
use App\Http\Controllers\DetalleventaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(ArticuloController::class)->group(function () {
    Route::get('/articulo', 'index');
    Route::get('/articulo/{id}', 'show');
    Route::post('/articulo', 'store');
    Route::put('/articulo/{id}', 'edit');
    Route::delete('/articulo/{id}', 'destroy');
});
Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categoria', 'index');
    Route::get('/categoria/{id}', 'show');
    Route::post('/categoria', 'store');
    Route::put('/categoria/{id}', 'edit');
    Route::delete('/categoria/{id}', 'destroy');
});
Route::controller(DetalleingresoController::class)->group(function () {
    Route::get('/detalleingreso', 'index');
    Route::get('/detalleingreso/{id}', 'show');
    Route::post('/detalleingreso', 'store');
    Route::put('/detalleingreso/{id}', 'edit');
    Route::delete('/detalleingreso/{id}', 'destroy');
});
Route::controller(DetalleventaController::class)->group(function () {
    Route::get('/detalleventa', 'index');
    Route::get('/detalleventa/{id}', 'show');
    Route::post('/detalleventa', 'store');
    Route::put('/detalleventa/{id}', 'edit');
    Route::delete('/detalleventa/{id}', 'destroy');
});
Route::controller(IngresoController::class)->group(function () {
    Route::get('/ingreso', 'index');
    Route::get('/ingreso/{id}', 'show');
    Route::post('/ingreso', 'store');
    Route::put('/ingreso/{id}', 'edit');
    Route::delete('/ingreso/{id}', 'destroy');
});
Route::controller(PersonaController::class)->group(function () {
    Route::get('/persona', 'index');
    Route::get('/persona/{id}', 'show');
    Route::post('/persona', 'store');
    Route::put('/persona/{id}', 'edit');
    Route::delete('/persona/{id}', 'destroy');
});
Route::controller(RolController::class)->group(function () {
    Route::get('/rol', 'index');
    Route::get('/rol/{id}', 'show');
    Route::post('/rol', 'store');
    Route::put('/rol/{id}', 'edit');
    Route::delete('/rol/{id}', 'destroy');
});
Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuario', 'index');
    Route::get('/usuario/{id}', 'show');
    Route::post('/usuario', 'store');
    Route::put('/usuario/{id}', 'edit');
    Route::delete('/usuario/{id}', 'destroy');
});
Route::controller(VentaController::class)->group(function () {
    Route::get('/venta', 'index');
    Route::get('/venta/{id}', 'show');
    Route::post('/venta', 'store');
    Route::put('/venta/{id}', 'edit');
    Route::delete('/venta/{id}', 'destroy');
});