<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table){
            $table->id();
            $table->string('NOME_ALUNO');
            $table->string('FAIXA_ETARIA_ALUNO');
            $table->string('ENDERECO_ALUNO')->nullable();
            $table->date('DATA_NASCIMENTO_ALUNO');
            $table->string('TELEFONE_ALUNO')->nullable();
            $table->string('EMAIL_ALUNO')->nullable();
            $table->string('CIDADE_ALUNO')->nullable();
            $table->timestamps();
        }
        );  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
