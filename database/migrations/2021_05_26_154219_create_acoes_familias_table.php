<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcoesFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acoes_familias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familia');
            $table->unsignedBigInteger('acao');
            $table->enum('presenciou', ['S', 'N']);
            $table->text('observacao')->nullable();
            $table->timestamps();

            $table->foreign('familia')->references('id')->on('familias')->onDelete('CASCADE');
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
        Schema::dropIfExists('acoes_familias');
    }
}
