<?php

use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('reservas.index');
});

Route::resource('laboratorios', LaboratorioController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);
