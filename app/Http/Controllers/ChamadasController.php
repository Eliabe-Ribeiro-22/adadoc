<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chamada;


class ChamadasController extends Controller
{
    public function chamadas(){
        return view('chamadas.pgChamadas');
    }
    
    public function chamada(){
        return view('chamadas.pgChamada');
    }

    public function create(Request $request){
        
        try{
            $chamada = new Chamada;
            
            // $table->date('DATA_CHAMADA');
            // $table->string('FAIXA_ETARIA_ALUNOS');
            // $table->string('DIVISA_CHAMADA');
            // $table->string('PROFESSOR')->nullable();
            //$table->integer('QUANTIDADE_PRESENTES');
            //$table->integer('QUANTIDADE_AUSENTES');
            //$table->integer('QUANTIDADE_JUSTIFICADAS');

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
}
