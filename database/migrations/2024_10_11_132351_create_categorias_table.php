<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id_categoria');
            $table->string('nome_categoria', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Remover a chave estrangeira explicitamente
        Schema::table('categorias', function (Blueprint $table) {
            $table->dropForeign(['id_produto']);
        });

        // Dropar a tabela
        Schema::dropIfExists('categorias');
    }

};
