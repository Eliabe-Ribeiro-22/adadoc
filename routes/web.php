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

// deletar aluno
Route::delete('/delaluno/{id}', [AlunosController::class, 'delete'])->name('delaluno');
Route::get('/edit_aluno/{id}', [AlunosController::class, 'edit'])->name('edit_aluno');
Route::put('/update_aluno',[AlunosController::class, 'update'])->name('update_aluno');



// Rotas de Notas
Route::get('/home_notas', [NotasController::class, 'notas']);
Route::get('/nota', [NotasController::class, 'nota']);
//cadastrar nova nota
Route::post('/nota', [NotasController::class, 'create']);

// deletar nota
Route::delete('/delnota/{id}', [NotasController::class, 'delete'])->name('delnota');
Route::get('/edit_nota/{id_nota}/{aluno_id}', [NotasController::class, 'edit'])->name('edit_nota');
Route::put('/update_nota',[NotasController::class, 'update'])->name('update_nota');



// Rotas de Chamadas
Route::get('/home_chamadas', [ChamadasController::class, 'chamadas']);
Route::get('/chamada', [ChamadasController::class, 'chamada']);
// cadastrar nova chamada
Route::post('/chamada', [ChamadasController::class, 'create']);
// Deletar chamada
Route::delete('/delchamada/{id}', [ChamadasController::class, 'delete'])->name('delchamada');
Route::get('/edit_chamada/{id}', [ChamadasController::class, 'edit'])->name('edit_chamada');
Route::put('/update_chamada', [ChamadasController::class, 'update'])->name('update_chamada');