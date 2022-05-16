<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblRespuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 1,
            'desRespuesta' => 'Registros',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 1,
            'desRespuesta' => ' Registros con variantes',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 1,
            'desRespuesta' => ' Conjuntos',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 1,
            'desRespuesta' => ' Formaciones',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 2,
            'desRespuesta' => 'Emplear sólo funciones puras ',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 2,
            'desRespuesta' => ' Emplear desarrollo descendente ',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 2,
            'desRespuesta' => 'No acceder a variables externas',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 2,
            'desRespuesta' => 'Ninguna de las anteriores',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 3,
            'desRespuesta' => 'Pueden tener cualquier dimensión',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 3,
            'desRespuesta' => 'Pueden tener cualquier dimensión',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 3,
            'desRespuesta' => 'Sólo pueden tener tipos simples como elementos.',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 3,
            'desRespuesta' => 'Simplifica las condiciones de contorno.',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);


        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 4,
            'desRespuesta' => 'Constantes.',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 4,
            'desRespuesta' => 'Tipos.',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 4,
            'desRespuesta' => 'Subprogramas.',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 4,
            'desRespuesta' => 'Variables.',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 5,
            'desRespuesta' => 'un Sistema Gestor de Bases de Datos (SGBD).',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 5,
            'desRespuesta' => 'una base de datos',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 5,
            'desRespuesta' => 'una aplicación informática para el manejo de bases de datos',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 5,
            'desRespuesta' => 'ninguna de las anteriores',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 6,
            'desRespuesta' => 'una base de datos jerárquica',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 6,
            'desRespuesta' => 'un Sistema Gestor de Bases de Datos (SGBD)',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 6,
            'desRespuesta' => 'una base de datos relacional',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 6,
            'desRespuesta' => 'ninguna de las anteriores',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 7,
            'desRespuesta' => 'Libros, Socios y Préstamos serían entidades de la base de datos',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 7,
            'desRespuesta' => 'Socios sería la relación entre Libros y Géneros Literarios',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 7,
            'desRespuesta' => 'Libros y Socios serían entidades, y Préstamos la relación',
            'correcta' => 1,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);

        DB::table('tblrespuestas')->insert([
            'cvePregunta' => 7,
            'desRespuesta' => 'Ninguna de las anteriores',
            'correcta' => 0,
            'activo' => 1,
            'fechaActualizacion' => date('Y-m-d H:i:s'),
            'fechaRegistro' => date('Y-m-d H:i:s')
        ]);
    }
}
