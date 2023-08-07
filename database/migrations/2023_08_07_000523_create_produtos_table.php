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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('id_produto');
            $table->string('nome', 400);
            $table->string('descricao', 400);
            $table->decimal('preco', 10, 2);
            $table->integer('quantidade');
            $table->unsignedBigInteger('fornecedor_id');
            $table->timestamps();
            $table->foreign('fornecedor_id')->references('id_fornecedor')->on('fornecedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
