<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunidade');
            $table->text('descricao')->nullable();
            $table->date('dia');
            $table->time('hora');
            $table->enum('status', ['Ativo', 'Cancelado']);
            $table->text('motivo')->nullable();
            $table->timestamps();

            $table->foreign('comunidade')->references('id')->on('comunidades')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acoes');
    }
}
