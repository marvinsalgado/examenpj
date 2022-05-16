<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblAccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblacciones')->insert([
            'desAccion' => 'UPDATE',
            'activo' => 1,
        ]);

        DB::table('tblacciones')->insert([
            'desAccion' => 'DELETE',
            'activo' => 1,
        ]);

        DB::table('tblacciones')->insert([
            'desAccion' => 'CREATE',
            'activo' => 1,
        ]);
    }
}
