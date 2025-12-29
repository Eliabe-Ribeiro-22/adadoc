<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ALuno;
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
            $aluno = new Aluno;
            $aluno->NOME_ALUNO = $request->NOME_ALUNO;
            $aluno->FAIXA_ETARIA_ALUNO = $request->FAIXA;
            $aluno->ENDERECO_ALUNO = $request->ENDERECO_ALUNO;
            $aluno->DATA_NASCIMENTO_ALUNO = $request->DATA_NASCIMENTO_ALUNO;
            $aluno->CELULAR_ALUNO = $request->CELULAR_ALUNO;
            $aluno->EMAIL_ALUNO = $request->EMAIL_ALUNO;

            $aluno->save();

            return redirect("/home_alunos")->with('msg', 'Aluno cadastrado com sucesso');
        }catch(Exception $e){
            return redirect("/home_alunos")->with('msg', 'Erro ao cadastrar o aluno. Tente novamente mais tarde');
        }

        
    }
}
