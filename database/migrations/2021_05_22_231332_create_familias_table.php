<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comunidade');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg')->nullable();
            $table->string('estado_civil');
            $table->string('foto')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('familias');
    }
}
