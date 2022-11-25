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

// Path: app/Http/Controllers/ProfissionalModel.php
Route::post('/profissional/cadastrar', 'App\Http\Controllers\Profissional@cadastrar');
Route::get('/profissional', 'App\Http\Controllers\Profissional@todosProfissionais');
Route::get('/profissional/{id}', 'App\Http\Controllers\Profissional@pegarProfissional');
Route::delete('/profissional/deletar/{id}', 'App\Http\Controllers\Profissional@deletarProfissional');
Route::put('/profissional/atualizar/{id}', 'App\Http\Controllers\Profissional@atualizarProfissional');

// Path: app/Http/Controllers/Usuario.php
Route::post('/usuario/cadastrar', 'App\Http\Controllers\Usuario@cadastrar');
Route::get('/usuario', 'App\Http\Controllers\Usuario@todosUsuarios');
Route::get('/usuario/{id}', 'App\Http\Controllers\Usuario@pegarUsuario');
Route::delete('/usuario/deletar/{id}', 'App\Http\Controllers\Usuario@deletarUsuario');
Route::put('/usuario/atualizar/{id}', 'App\Http\Controllers\Usuario@atualizarUsuario');

