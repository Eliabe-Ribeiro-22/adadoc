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

    public function create(Request $request){
        try{
            return redirect("/")->with('msg', 'Aluno cadastrado com sucesso');
        }catch(Exception $e){
            return redirect("/")->with('msg', 'Erro ao cadastrar o aluno. Tente novamente mais tarde');
        }

        
    }
}
