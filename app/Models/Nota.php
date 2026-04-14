<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
    }

 // protected $cast = [
   // 'items' => 'array'
  //];
  protected $dates = ['DATA_NOTA'];
  protected $guarded = [];
  protected $fillable = [];
}
