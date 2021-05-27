<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcoesLocaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acoes_locais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acao');
            $table->string('nome_local')->nullable();
            $table->string('rua');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cep');
            $table->text('mapa')->nullable();
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
        Schema::dropIfExists('acoes_locais');
    }
}
