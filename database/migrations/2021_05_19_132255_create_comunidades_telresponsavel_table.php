<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunidadesTelresponsavelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidades_telresponsavel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resp_comunidade');
            $table->unsignedBigInteger('comunidade');
            $table->string('telefone');
            $table->timestamps();

            $table->foreign('resp_comunidade')->references('id')->on('comunidades_responsavel')->onDelete('CASCADE');
            $table->foreign('comunidade')->references('id')->on('comunidades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunidades_telresponsavel');
    }
}
