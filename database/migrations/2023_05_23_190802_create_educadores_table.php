<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('educadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->enum('funcao', ['Docente', 'Diretor Pedagogico', 'Diretor Administrativo Financeiro', 'Coordenador Pedagogico', 'Sede SME']);
            $table->text('qualificacao');
            $table->integer('experiencia');
            $table->integer('progressao_carreira');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educadores');
    }
};
