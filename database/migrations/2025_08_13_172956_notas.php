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
        Schema::create('notas', function (Blueprint $table){
            $table->id();
            $table->string('NOME_ALUNO');
            $table->string('FAIXA_ETARIA_ALUNO');
            $table->integer('VALOR_NOTA');
            $table->date('DATA_NOTA');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
