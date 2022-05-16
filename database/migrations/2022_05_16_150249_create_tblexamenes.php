<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblexamenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblexamenes', function (Blueprint $table) {
            $table->id('idExamen');
            $table->unsignedBigInteger('idUsuario');
            $table->integer('numPreguntas',2);
            $table->dateTime('fechaRegistro');
            $table->dateTime('fechaActualizacion');
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblexamenes');
    }
}
