<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblPreguntasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿El esquema de datos UNION, se logra mediante? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿La transparencia referencial impone? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿Los vectores abiertos? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿La programación a la defensiva recomienda usar? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿Un archivo o conjunto de archivos que contienen múltiples informaciones que, de alguna
forma, guardan relación es? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿La herramienta informática que permite crear, manipular, gestionar y eliminar los datos y las estructuras de una base de datos es ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblpreguntas')->insert([
            'desPregunta' => '¿En una base de datos de una biblioteca públic? ',
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);
    }
}
