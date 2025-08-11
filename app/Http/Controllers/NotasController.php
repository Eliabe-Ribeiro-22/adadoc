<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function notas(){
        return view('notas.pgNotas');
    }

    public function nota(){
        return view('notas.pgNota');
    }
}
