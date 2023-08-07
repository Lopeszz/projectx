<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nome', 400);
            $table->string('cpf', 20);
            $table->string('email', 400);
            $table->string('usuario', 400);
            $table->string('senha', 500);
            $table->string('celular', 400);
            $table->string('cep', 400);
            $table->string('rua', 255);
            $table->integer('numero')->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 2);
            $table->boolean('nivel_acesso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
