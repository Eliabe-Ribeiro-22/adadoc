<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;


Route::get('/', [AlunosController::class, 'inicio'])->name('inicio');
Route::get('/home_alunos',[AlunosController::class, 'alunos']);
Route::get('/aluno', [AlunosController::class, 'aluno']);
