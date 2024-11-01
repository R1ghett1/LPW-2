<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido'); // Chave primária
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade'); // Chave estrangeira
            $table->enum('status', ['RE', 'PA', 'CA']);
            $table->string('status_pedido', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
