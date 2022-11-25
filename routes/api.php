<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/paciente/cadastrar', 'App\Http\Controllers\Paciente@cadastrar');
Route::get('/paciente', 'App\Http\Controllers\Paciente@todosPacientes');
Route::get('/paciente/{id}', 'App\Http\Controllers\Paciente@pegarPaciente');
Route::delete('/paciente/deletar/{id}', 'App\Http\Controllers\Paciente@deletarPaciente');
Route::put('/paciente/atualizar/{id}', 'App\Http\Controllers\Paciente@atualizarPaciente');
