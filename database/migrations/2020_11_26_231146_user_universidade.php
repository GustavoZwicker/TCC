<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserUniversidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserUniversidade', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('universidade_id')->unsigned();
            $table->integer('user_id');
            $table->foreign('universidade_id')
                ->references('id')->on('universidades')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
