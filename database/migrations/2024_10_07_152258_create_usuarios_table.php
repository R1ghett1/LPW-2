<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->id('id_usuario');
            $table->string('nome_usuario', 255);
            $table->string('email_usuario', 100);
            $table->string('senha_usuario', 100);
            $table->string('tipo_usuario', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
