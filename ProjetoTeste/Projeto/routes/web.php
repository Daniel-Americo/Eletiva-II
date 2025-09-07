<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeiraController;

use App\Http\Controllers\ClienteController;

Route::resource('clientes', ClienteController::class);
//Listar Clientes - GET /clientes -- Route::get('/clientes', [ClienteController::class, 'index'])
//Abrir formulário para inserir registro - GET /clientes/create -- [ClienteController::class, 'create']
//Salvar dados - POST /clientes -- método store
//Mostrar dados do registro - GET /clientes/{id_cliente} -- método show
//Abrir formulário para editar registro - GET /clientes/{id_cliente}/edit --método edit
//Salvar alterações - PUT /clientes/{id_cliente} -- método update
//Excluir um registro - DELETE /clientes/{id_cliente} -- método destroy


Route::get('/', [PrimeiraController::class, 'menu']);

Route::get("/exercicio1", [PrimeiraController::class, "exercicio1"]);
Route::post("/respexercicio1", [PrimeiraController::class, "respexercicio1"]);

Route::get("/exercicio2", [PrimeiraController::class, "exercicio2"]);
Route::post("/respexercicio2", [PrimeiraController::class, "respexercicio2"]);

Route::get("/exercicio3", [PrimeiraController::class, "exercicio3"]);
Route::post("/respexercicio3", [PrimeiraController::class, "respexercicio3"]);

Route::get("/exercicio4", [PrimeiraController::class, "exercicio4"]);
Route::post("/respexercicio4", [PrimeiraController::class, "respexercicio4"]);

Route::get("/exercicio5", [PrimeiraController::class, "exercicio5"]);
Route::post("/respexercicio5", [PrimeiraController::class, "respexercicio5"]);

Route::get("/exercicio6", [PrimeiraController::class, "exercicio6"]);
Route::post("/respexercicio6", [PrimeiraController::class, "respexercicio6"]);

Route::get("/exercicio7", [PrimeiraController::class, "exercicio7"]);
Route::post("/respexercicio7", [PrimeiraController::class, "respexercicio7"]);

Route::get("/exercicio8", [PrimeiraController::class, "exercicio8"]);
Route::post("/respexercicio8", [PrimeiraController::class, "respexercicio8"]);

Route::get("/exercicio9", [PrimeiraController::class, "exercicio9"]);
Route::post("/respexercicio9", [PrimeiraController::class, "respexercicio9"]);

Route::get("/exercicio10", [PrimeiraController::class, "exercicio10"]);
Route::post("/respexercicio10", [PrimeiraController::class, "respexercicio10"]);

Route::get("/exercicio11", [PrimeiraController::class, "exercicio11"]);
Route::post("/respexercicio11", [PrimeiraController::class, "respexercicio11"]);

Route::get("/exercicio12", [PrimeiraController::class, "exercicio12"]);
Route::post("/respexercicio12", [PrimeiraController::class, "respexercicio12"]);

Route::get("/exercicio13", [PrimeiraController::class, "exercicio13"]);
Route::post("/respexercicio13", [PrimeiraController::class, "respexercicio13"]);

Route::get("/exercicio14", [PrimeiraController::class, "exercicio14"]);
Route::post("/respexercicio14", [PrimeiraController::class, "respexercicio14"]);

Route::get("/exercicio15", [PrimeiraController::class, "exercicio15"]);
Route::post("/respexercicio15", [PrimeiraController::class, "respexercicio15"]);

Route::get("/exercicio16", [PrimeiraController::class, "exercicio16"]);
Route::post("/respexercicio16", [PrimeiraController::class, "respexercicio16"]);

Route::get("/exercicio17", [PrimeiraController::class, "exercicio17"]);
Route::post("/respexercicio17", [PrimeiraController::class, "respexercicio17"]);

Route::get("/exercicio18", [PrimeiraController::class, "exercicio18"]);
Route::post("/respexercicio18", [PrimeiraController::class, "respexercicio18"]);

Route::get("/exercicio19", [PrimeiraController::class, "exercicio19"]);
Route::post("/respexercicio19", [PrimeiraController::class, "respexercicio19"]);

Route::get("/exercicio20", [PrimeiraController::class, "exercicio20"]);
Route::post("/respexercicio20", [PrimeiraController::class, "respexercicio20"]);

