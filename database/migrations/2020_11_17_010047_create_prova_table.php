<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prova', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ano');
            $table->string('caminho');
            $table->string('gabarito');
            $table->integer('universidade_id')->unsigned();
            $table->foreign('universidade_id')->references('id')->on('Universidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prova');
    }
}
