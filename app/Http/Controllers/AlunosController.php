<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ALuno;
class AlunosController extends Controller
{
    // rota principal do site
    public function inicio(){
        return view("home");
    }

    public function alunos(){
        // exibir alunos em ordem alfabética
        $alunos = Aluno::orderBy('NOME_ALUNO')->get();

        // se fosse em decrescente
        //  $alunos = Aluno::orderByDesc('NOME_ALUNO')->get();
        // outras opções
        //    $allAlunos = Aluno::all(); // Retrieves all records
       //     $sortedAlunos = $allAlunos->sortBy('name'); // Sorts by the 'name' attribute ascending

         // For descending order, use sortByDesc():
                // $sortedAlunosDesc = $allAlunos->sortByDesc('name');
        return view('alunos.pgAlunos', ["alunos" => $alunos]);
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

    public function delete(int $id){
        try{
            Aluno::FindOrFail($id)->delete();
            return redirect('/home_alunos')->with('msg', "Aluno $id deletado com suceso");
        }catch(Exception $e){
            return redirect('/home_alunos')->with('msg', 'Erro ao deletar aluno. Tente novamente mais tarde');
        }
    }

    public function edit(int $id){
        try{
            $aluno = ALuno::FindOrFail($id);
            return view('alunos.edit_aluno', ['aluno' => $aluno]);
        }catch(Exception $e){
            return redirect('/home_alunos')->with('msg', 'Erro ao exibir o aluno a ser editado');
        }
        
    }
}
