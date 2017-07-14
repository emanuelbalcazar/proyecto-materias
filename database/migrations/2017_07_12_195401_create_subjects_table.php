<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code'); // codigo de la materia ej. IF01
            $table->string('name'); // nombre de la materia
            $table->integer('total_hours')->nullable(true); // cantidad de horas totales
            $table->string('correlative')->nullable(true);  // correlativas de la materia
            $table->string('period');   // periodo (anual o cuatrimestral)
            $table->integer('quarter')->nullable(true); // cuatrimestre (1ero o 2do)
            $table->integer('year');    // año en el que se dicta la materia
            $table->integer('promotion');   // promocionable? (true o false)
            $table->integer('final');   // con final? (true o false)
            $table->string('career_code')->nullable(true);  // codigo de la carrera a la cual pertenece
            $table->string('university_code')->nullable(true);  // codigo de la universidad donde se dicta
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
