<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function inicio(){
        return view("home");
    }

    public function alunos(){
        return view('alunos.pgAlunos');
    }
    public function aluno(){
        return view('alunos.pgAluno');
    }
}
