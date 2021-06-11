<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaoFamiliasCadastradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acao_familias_cadastradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familia');
            $table->unsignedBigInteger('acao');
            $table->enum('presenca', ['Presenciou', 'Faltou']);
            $table->timestamps();

            $table->foreign('familia')->references('id')->on('familias');
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
        Schema::dropIfExists('acao_familias_cadastradas');
    }
}
