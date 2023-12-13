<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::resources([
    'pratos' => App\Http\Controllers\PratoController::class,
    'comandas' => App\Http\Controllers\ComandaController::class,
    'pagamentos' => App\Http\Controllers\PagamentoController::class,
    'usuarios' => App\Http\Controllers\UsuarioController::class,
]);
