<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;
use App\Models\Vuelo;
use App\Models\VueloAsiento;

class TipoAsientoController extends Controller
{
    public function tipoAsiento(){

        $asientoa = TipoAsiento::where('ESTADO', 'A');
        return view('tiposAsientos', compact('asientoa'));
    }

    public function agregarTipo(){

        return view('agregarTipoAsiento');
    }
    
    public function crear(Request $request){

        $tipoasiento = new TipoAsiento();
        $tipoasiento->DESCRIPCION = $request->input('descripcion');
        $tipoasiento->PRECIO = $request->input('precio');
        $tipoasiento->ESTADO = $request->input('estado');
        $tipoasiento->save();
        return view('agregarTipoAsiento');
    }
    public function editar(){

        return view('editarAsiento');
    }

    public function eliminar($id){

        $asiento = TipoAsiento::find($id);
        $asiento->ESTADO = 'I';
        $asiento->save();
        $asientoa = TipoAsiento::where('ESTADO', 'A');

        return view('tiposAsientos', compact('asientoa'));
    }
}
