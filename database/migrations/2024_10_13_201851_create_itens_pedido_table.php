<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id('id_itens_pedido');
            $table->foreignId('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');
            $table->foreignId('id_produto')->references('id_produto')->on('produtos')->onDelete('cascade');
            $table->integer('quantidade');
            $table->integer('preco_unitario');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_pedido');
    }
};
