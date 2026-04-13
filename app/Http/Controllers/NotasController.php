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
        $nota = 0;
        $alunos = Aluno::orderBy('NOME_ALUNO')->get();

        return view('notas.pgNota',['alunos' => $alunos, 'nota' => $nota]);
    }

    public function create(Request $request){
        try{
            // INSERE DADOS DA NOTA
            $nota = new Nota;
            $nota->FAIXA = $request->FAIXA;
            $nota->aluno_id = intval($request->ALUNO_ID);
            $nota->VALOR_NOTA = intval($request->VALOR_NOTA);
            $nota->DATA_NOTA = $request->DATA_NOTA;


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
    public function edit($id_nota, $aluno_id=1){
            try{
                $nota = Nota::findOrFail($id_nota);
                //$aluno = Aluno::findOrFail($aluno_id);
                // chuchu nota aluno padrão =1 + #numero aleatorio no chuchu aqui
                $aluno = Aluno::findOrFail(1);
                return view('notas.editNota', ['nota' => $nota, 'aluno' => $aluno]);

            }catch(Exception $e){
                    return redirect('/home_notas')->with('msg', 'Erro ao exibir nota editar');
            }
    }

    public function update(Request $request){
        try{
            $data = $request->all();
            // pesquisa pelo id 
            Nota::findOrFail($request->id)
            // altera com os novos dados da requisição
            ->update($data);   
            return redirect('/home_notas')->with('msg', 'Sucesso ao editar nota');
        }catch(Exception $e){
            return redirect('/home_notas')->with('msg','Erro ao editar nota. Tente novamente mais tarde');
        }
    }
}
