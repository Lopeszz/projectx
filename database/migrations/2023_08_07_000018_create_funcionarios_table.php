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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('id_funcionario');
            $table->string('nome', 400);
            $table->string('cpf', 20);
            $table->string('email', 50);
            $table->string('usuario', 400);
            $table->string('senha', 400);
            $table->string('salario', 50);
            $table->string('celular', 400);
            $table->boolean('nivel_acesso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
