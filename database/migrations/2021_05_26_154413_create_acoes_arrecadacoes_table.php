<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcoesArrecadacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acoes_arrecadacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acao');
            $table->string('descricao');
            $table->string('quantidade');
            $table->timestamps();

            $table->foreign('acao')->references('id')->on('acoes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acoes_arrecadacoes');
    }
}
