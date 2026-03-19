<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Usando a model Chamada
use App\Models\Chamada;


class ChamadasController extends Controller
{
    public function chamadas(){
        $chamadas = Chamada::all();
        return view('chamadas.pgChamadas', ['chamadas' => $chamadas]);
    }
    
    public function chamada(){
        return view('chamadas.pgChamada');
    }

    public function create(Request $request){
        
        try{
            $chamada = new Chamada;
            
            $chamada->DATA_CHAMADA = $request->DATA_CHAMADA;
            $chamada->FAIXA_ETARIA_ALUNOS = $request->FAIXA;
            $chamada->DIVISA_CHAMADA = $request->DIVISA_CHAMADA;
            $chamada->PROFESSOR = $request->PROFESSOR;
            $chamada->QUANTIDADE_PRESENTES = $request->QTDADE_PRESENTES;
            $chamada->QUANTIDADE_AUSENTES = $request->QTDADE_AUSENTES;
            $chamada->QUANTIDADE_JUSTIFICADAS = $request->QTDADE_JUSTIFICADAS;

            $chamada->save();

            return redirect('/home_chamadas')->with('msg', 'Chamada cadastrada com sucesso');
        }
        catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao cadastrar chamada. Tente novamente mais tarde');
        }
    }

    public function delete(int $id){
        try{
            echo "id é:" . $id;
            return redirect('/home_chamadas')->with('msg', "Chamada $id excluida com sucesso");
        }
        catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao excluir chamada. Tente novamente mais tarde');
        }

    }
}
