<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // carrera - [oferta academica] - universidad
        Schema::create('academic_offer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('faculty');    // facultad a la que pertenece la carrera
            $table->integer('career_id')->unsigned();     // codigo de la carrera
            $table->integer('university_id')->unsigned(); // codigo de la universidad
        });

        Schema::table('academic_offer', function (Blueprint $table) {
            $table->foreign('career_id')->references('id')->on('careers');
            $table->foreign('university_id')->references('id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_offer');
    }
}
