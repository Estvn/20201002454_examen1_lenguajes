<?php

use App\Http\Controllers\VueloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VueloAsientoController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/inicio', [VueloController::class, 'inicio'])->name('inicio');
Route::get('/tipoAsiento', [TipoAsientoController::class, 'tipoAsiento'])->name('tipoasiento.tipoasiento');
Route::get('/tipoAsiento/agregarTipo', [TipoAsientoController::class, 'agregarTipo'])->name('asiento.agregartipo');
Route::post('/tipoAsiento/crear', [TipoAsientoController::class, 'crear'])->name('asiento.crear');

Route::get('/tipoAsiento/editar', [TipoAsientoController::class, 'editar'])->name('asiento.editar');
Route::get('/tipoAsiento/eliminar', [TipoAsientoController::class, 'eliminar'])->name('asiento.eliminar');

Route::get('/vuelo', [VueloController::class, 'vuelo'])->name('vuelo.vuelo');
Route::get('/vuelo/agregar', [VueloController::class, 'agregar'])->name('vuelo.agregar');
Route::get('/vuelo/editar/{id}', [VueloController::class, 'editar'])->name('vuelo.editar');
