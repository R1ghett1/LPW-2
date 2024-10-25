<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id('id_avalicao');
            $table->foreignId('id_produto')->references('id_produto')->on('produtos')->onDelete('cascade');
            $table->foreignId('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->integer('nota_avaliacao');
            $table->text('comentario_avaliacao');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};
