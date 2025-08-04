<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;


Route::get('/', [AlunosController::class, 'home']);
Route::get('/home_alunos',[AlunosController::class, 'alunos']);
