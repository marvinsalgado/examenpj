<?php

namespace App\Http\Controllers;

use App\TblBitacoras;
use App\TblExamenes;
use App\TblExamenesPreguntas;
use Illuminate\Http\Request;

class TblExamenesController extends Controller
{
    public function index()
    {
        return TblExamenes::get();
    }

    public function getExamenesUser($id) {
        return TblExamenes::where('idUsuario', $id)->get();
    }

    public function getExamenesPreguntas($id) {
        return TblExamenesPreguntas::select('tblpreguntas.cvePregunta', 'tblpreguntas.desPregunta')
        ->join('tblpreguntas', 'tblpreguntas.cvePregunta', '=', 'tblexamenespreguntas.cvePregunta')
        ->where('idExamen', $id)->get();
    }

    public function store(Request $request){
        $examenes = new TblExamenes();

        if($request['preguntas']) {
            $var = json_decode($request->get('preguntas'), true);
            $examenes->idUsuario = $request['userId'];
            $examenes->numPreguntas = $request['numPreguntas'];
            $examenes->fechaRegistro = date('Y-m-d H:i:s');
            $examenes->fechaActualizacion = date('Y-m-d H:i:s');
            if($examenes->save()) {
                foreach ($var as $value){
                    $examnesPreguntas = new TblExamenesPreguntas();
                    $examnesPreguntas->idExamen = $examenes->id;
                    $examnesPreguntas->cvePregunta = $value['cvePregunta'];
                    $examnesPreguntas->activo = 1;
                    $examnesPreguntas->fechaRegistro = date('Y-m-d H:i:s');
                    $examnesPreguntas->fechaActualizacion = date('Y-m-d H:i:s');
                    $examnesPreguntas->save();
                }

                $bitacora = new TblBitacoras();
                $bitacora->idUsuario = $request['userId'];
                $bitacora->cveAccion = 3;
                $bitacora->fechaMovimiento = date('Y-m-d H:i:s');
                $bitacora->fechaAcctualizaion = date('Y-m-d H:i:s');
                $bitacora->observaciones = 'Se agrego un nuevo examen';
                $bitacora->save();

                return response()->json(['success' => true, 'message' => 'Examen agregado correctamente']);
            }


        }
    }

    public function destroy($request) {
        $examenesPreguntas = TblExamenesPreguntas::where('idExamen', '=',$request)->get();
        foreach ($examenesPreguntas as $value){
            $uno = TblExamenesPreguntas::where('idExamenPregunta', '=',$value->idExamenPregunta);
            $uno->delete();
        }
        $bitacora = new TblBitacoras();
        $bitacora->idUsuario = 1;
        $bitacora->cveAccion = 2;
        $bitacora->fechaMovimiento = date('Y-m-d H:i:s');
        $bitacora->fechaAcctualizaion = date('Y-m-d H:i:s');
        $bitacora->observaciones = 'Se borro un examen';
        $bitacora->save();

        return TblExamenes::where('idExamen', '=', $request)->delete();



    }
}
