<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id_produto');
            $table->foreignId('id_categoria')->references('id_categoria')->on('categorias')->onDelete('cascade');
            $table->string('nome_produto');
            $table->string('descricao_produto');
            $table->float('preco_produto');
            $table->integer('estoque_produto');
            $table->string('imagem')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
