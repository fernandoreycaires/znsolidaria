<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaoFamiliasNaoCadastradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acao_familias_nao_cadastradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acao');
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('telefone')->nullable();
            $table->timestamps();

            $table->foreign('acao')->references('id')->on('acoes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acao_familias_nao_cadastradas');
    }
}
