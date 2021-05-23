<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias_emails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familia');
            $table->string('email')->nullable();
            $table->timestamps();

            $table->foreign('familia')->references('id')->on('familias')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familias_emails');
    }
}
