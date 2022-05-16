<?php

namespace App\Http\Controllers;

use App\TblAcciones;
use Illuminate\Http\Request;

class TblAccionesController extends Controller
{
    public function index()
    {
        return TblAcciones::where('activo', 1)->get();
    }

    public function store(Request $request)
    {
        $acciones = new TblAcciones();
        $acciones->descAccion = $request->descAccion;
        $acciones->activo = 1;
        $acciones->save();
    }

}
