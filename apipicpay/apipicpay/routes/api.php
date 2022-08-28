<?php

use App\Http\Controllers\EletrodomesticoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get("/", [EletrodomesticoController::class, "index"])->name("index");

Route::get("/listareletrodomestico", [EletrodomesticoController::class, "listar"])->name("listareletrodomestico");

Route::post("/cadastrarok", [EletrodomesticoController::class, "cadastrar"])->name("cadastrareletrodomestico");

Route::post("/atualizareletrodomestico", [EletrodomesticoController::class, "atualizar"])->name("atualizareletrodomestico");

Route::post("/deletareletrodomestico", [EletrodomesticoController::class, "deletar"])->name("deletareletrodomestico");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
