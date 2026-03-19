<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// usando modelo Nota
use App\Models\Nota;

// modelo ALunos - one to many
use App\Models\Aluno;

class NotasController extends Controller
{
    public function notas(){
        // falta 'ordenar por'
        $notas = Nota::all();
        return view('notas.pgNotas', ['notas'=> $notas]);
    }

    public function nota(){
        $alunos = Aluno::orderBy('NOME_ALUNO')->get();

        return view('notas.pgNota',['alunos' => $alunos]);
    }

    public function create(Request $request){
        try{
            // INSERE DADOS DA NOTA
            $nota = new Nota;
            $nota->FAIXA = $request->FAIXA;
            $nota->NOME_ALUNO = $request->NOME_ALUNO;
            $nota->VALOR_NOTA = $request->VALOR_NOTA;
            $nota->DATA_NOTA = $request->DATA_NOTA;

            // VER outro dia. xuxu
           // $nota->aluno_id = $request->aluno_id;
            
            //SALVA NO BANCO
            $nota->save();
            return redirect('/home_notas')->with('msg', 'Nota cadastrada com sucesso');
        }catch(Exception $e){
            return redirect('/home_notas')->with('msg', 'Erro ao cadastrar nota. Tente novamente mais tarde!');
        }
    }

    public function delete(int $id){
        try{
            Nota::findOrFail($id)->delete();
            return redirect('/home_notas')->with('msg', "Nota $id excluida com sucesso");
        }catch(Exception $e){
             return redirect('/home_notas')->with('msg', 'Erro ao excluir nota. Tente novamente mais tarde');
        }
    }
}
