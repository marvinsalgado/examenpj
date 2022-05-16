<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblrespuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrespuestas', function (Blueprint $table) {
            $table->id('cveRespuesta');
            $table->unsignedBigInteger('cvePregunta');
            $table->string('desRespuesta', 500);
            $table->char('correcta', 1);
            $table->char('activo', 1);
            $table->dateTime('fechaRegistro');
            $table->dateTime('fechaActualizacion');
            $table->timestamps();

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
        Schema::dropIfExists('tblrespuestas');
    }
}
