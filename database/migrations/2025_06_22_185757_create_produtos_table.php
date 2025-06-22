<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->double('preco', 5,2);
            $table->boolean('status');
            $table->longText('image');
            $table->foreignId('categoria_id')->constrained()->onDelete('restrict');
            $table->string('breve_descricao')->nullable();
            $table->string('codigo')->nullable();
           $table->string('subtitulo')->nullable();
           $table->string('caracteristicas')->nullable();
           $table->string('palavras_chave')->nullable();
           $table->integer('quantidade_min')->nullable();
           $table->decimal('valor_minimo')->nullable();
           $table->integer('prazo_producao')->nullable();
           $table->string('destaque')->nullable();
            $table->string('promocao')->nullable();
            $table->foreignId('loja_id')->constrained()->onDelete('restrict');
            $table->timestamps();
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
