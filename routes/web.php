<?php

use Illuminate\Support\Facades\Route;
// Controlador de Alunos cadastrados
use App\Http\Controllers\AlunosController;

// Controlador de Notas cadastradas
use App\Http\Controllers\NotasController;

// Controlador de Chamadas de Alunos cadastradas
use App\Http\Controllers\ChamadasController;

// Rotas de Alunos
Route::get('/', [AlunosController::class, 'inicio'])->name('inicio');
Route::get('/home_alunos',[AlunosController::class, 'alunos']);
Route::get('/aluno', [AlunosController::class, 'aluno']);
// cadastrar novo aluno
Route::post('/aluno', [AlunosController::class, 'create']);

// Rotas de Notas
Route::get('/home_notas', [NotasController::class, 'notas']);
Route::get('/nota', [NotasController::class, 'nota']);
//cadastrar nova nota
Route::post('/nota', [NotasController::class, 'create']);


// Rotas de Chamadas
Route::get('/home_chamadas', [ChamadasController::class, 'chamadas']);
Route::get('/chamada', [ChamadasController::class, 'chamada']);