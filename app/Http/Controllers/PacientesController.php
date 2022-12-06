<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;

class PacientesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function guardar(Request $request)
{
    $paciente = new Paciente;
    
    $paciente->nombre = $request->input('nombre');
    $paciente->correo = $request->input('correo');
    $paciente->contraseña = $request->input('contraseña');
    $paciente->genero = $request->input('genero');
    $paciente->observaciones = $request->input('observaciones');

    $paciente->save();

    return  redirect('/registrado');
}
}
