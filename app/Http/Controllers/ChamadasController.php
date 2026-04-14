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
            $chamada->QUANTIDADE_PRESENTES = $request->QUANTIDADE_PRESENTES;
            $chamada->QUANTIDADE_AUSENTES = $request->QUANTIDADE_AUSENTES;
            $chamada->QUANTIDADE_JUSTIFICADAS = $request->QUANTIDADE_JUSTIFICADAS;

            $chamada->save();

            return redirect('/home_chamadas')->with('msg', 'Chamada cadastrada com sucesso');
        }
        catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao cadastrar chamada. Tente novamente mais tarde');
        }
    }

    public function delete(int $id){
        try{
            
            Chamada::findOrFail($id)->delete();
            return redirect('/home_chamadas')->with('msg', "Chamada $id excluida com sucesso");
        }
        catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao excluir chamada. Tente novamente mais tarde');
        }

    }

    public function edit(int $id){
        try{
            $chamada = Chamada::findOrFail($id);
            return view('chamadas.edit_chamada', ['chamada' => $chamada]);

        }catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao exibir dados a serem editados na chamada');
        }
    }

    public function update(Request $request){
        try{
            $data = $request->all();
            Chamada::findOrFail($request->id)->update($data);
            return redirect('/home_chamadas')->with('msg', 'Chamada editada com sucesso');
        }catch(Exception $e){
            return redirect('/home_chamadas')->with('msg', 'Erro ao editar chamada. Tente novamente mais tarde!');
        }
    }

}
