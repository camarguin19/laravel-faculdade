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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome", "100");
            $table->string('cpf', 14)->unique();
            $table->string("email")->unique();
            $table->string("senha");
            $table->string("endereco");
            $table->string("complemento")->nullable();
            $table->string('cep', 9);
            $table->string('cidade', 50);
            $table->string('estado', 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pessoas');
    }
};
