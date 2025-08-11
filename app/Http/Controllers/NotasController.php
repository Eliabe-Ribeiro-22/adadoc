<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function notas(){
        return view('chamadas.pgNotas');
    }

    public function nota(){
        return view('chamadas.pgNota');
    }
}
