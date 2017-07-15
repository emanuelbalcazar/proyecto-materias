<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // materia - [dictada] - carrera
        Schema::create('dictated', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();    // codigo de la materia
            $table->integer('career_id')->unsigned();     // codigo de la carrera
        });

        Schema::table('dictated', function (Blueprint $table) {
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('career_id')->references('id')->on('careers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictated');
    }
}
