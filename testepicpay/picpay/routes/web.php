<?php

use App\Http\Controllers\CaracteristicaController;
use Illuminate\Http\Request;
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




Route::get('/caracteristicas', function () {
    return view('caracteristicas');
});


Route::post('cadastrarnovo', [ CaracteristicaController::class, 'cadastrar']);


//ler / listar ! usuario

Route::get('/caracteristicas',[ CaracteristicaController::class, 'index']);

//apagar

Route::get('/caracteristicas/{id}', [CaracteristicaController::class, 'apagar' ])->name ('caracteristicas-deletar');


//editar

Route::get('/caracteristicas/editar/{id}', [CaracteristicaController::class, 'edit'])->name('caracteristicas-editar');

Route::post('/caracteristicas/atualizar',[ CaracteristicaController::class, 'atualizar']);