<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {

            $table->id('id_endereco');
            $table->foreignId('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->string('endereco', 255);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->string('cep', 20);
            $table->string('pais', 100);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Remover a chave estrangeira explicitamente
        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
        });

        // Dropar a tabela
        Schema::dropIfExists('enderecos');
    }
};
