<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function notas(){
        return $this->hasMany('App\Models\Nota');
    }
}
