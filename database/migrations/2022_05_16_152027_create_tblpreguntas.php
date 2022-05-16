<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpreguntas', function (Blueprint $table) {
            $table->id('cvePregunta');
            $table->string('desPregunta',500);
            $table->char('activo',1);
            $table->dateTime('fechaRegistro');
            $table->dateTime('fechaActualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpreguntas');
    }
}
