<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ano');
            $table->string('caminho');
            $table->string('gabarito');
            $table->integer('universidades_id')->unsigned();
            $table->foreign('universidades_id')->references('id')->on('Universidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provas');
    }
}
