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
        Schema::create('chamadas', function (Blueprint $table){
            $table->id();
            $table->date('DATA_CHAMADA');
            $table->string('FAIXA_ETARIA_ALUNOS');
            $table->string('DIVISA_CHAMADA');
            $table->string('PROFESSOR')->nullable();
            $table->integer('QUANTIDADE_PRESENTES');
            $table->integer('QUANTIDADE_AUSENTES');
            $table->integer('QUANTIDADE_JUSTIFICADAS');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamadas');
    }
};
