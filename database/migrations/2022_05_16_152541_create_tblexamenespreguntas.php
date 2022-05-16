<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblexamenespreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblexamenespreguntas', function (Blueprint $table) {
            $table->id('idExamenPregunta');
            $table->unsignedBigInteger('idExamen');
            $table->unsignedBigInteger('cvePregunta');
            $table->char('activo',1);
            $table->dateTime('fechaRegistro');
            $table->dateTime('fechaActualizacion');
            $table->timestamps();

            $table->foreign('idExamen')->references('idExamen')->on('tblexamenes');
            $table->foreign('cvePregunta')->references('cvePregunta')->on('tblpreguntas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblexamenespreguntas');
    }
}
