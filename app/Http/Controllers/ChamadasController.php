<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChamadasController extends Controller
{
    public function chamadas(){
        return view('chamadas.pgChamadas');
    }
    
    public function chamada(){
        return view('chamadas.pgChamada');
    }
}
