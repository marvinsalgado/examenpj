<?php

namespace App\Http\Controllers;

use App\TblPreguntas;
use Illuminate\Http\Request;

class TblPreguntasController extends Controller
{
    public function index()
    {
        return TblPreguntas::where('activo', '=', '1')->get();
    }
}
