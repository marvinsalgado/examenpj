<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblbitacoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbitacoras', function (Blueprint $table) {
            $table->id('idBitacora');
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('cveAccion');
            $table->dateTime('fechaMovimiento');
            $table->dateTime('fechaAcctualizaion');
            $table->mediumText('observaciones');
            $table->timestamps();

            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('cveAccion')->references('cveAccion')->on('tblacciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblbitacoras');
    }
}
