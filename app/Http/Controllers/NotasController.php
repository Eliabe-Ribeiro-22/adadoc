<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// usando modelo Nota
use App\Models\Nota;

class NotasController extends Controller
{
    public function notas(){
        $notas = Nota::all();
        return view('notas.pgNotas', ['notas'=> $notas]);
    }

    public function nota(){
        return view('notas.pgNota');
    }

    public function create(Request $request){
        try{
            // INSERE DADOS DA NOTA
            $nota = new Nota;
            $nota->FAIXA = $request->FAIXA;
            $nota->NOME_ALUNO = $request->NOME_ALUNO;
            $nota->VALOR_NOTA = $request->VALOR_NOTA;
            $nota->DATA_NOTA = $request->DATA_NOTA;

            //SALVA NO BANCO
            $nota->save();
            return redirect('/home_notas')->with('msg', 'Nota cadastrada com sucesso');
        }catch(Exception $e){
            return redirect('/home_notas')->with('msg', 'Erro ao cadastrar nota. Tente novamente mais tarde!');
        }
        

    }
}
