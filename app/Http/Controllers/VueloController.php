<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;
use App\Models\Vuelo;
use App\Models\VueloAsiento;
class VueloController extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function vuelo(){
        return view('vuelos');
    }

    public function agregar(){
        return view('nuevoVuelo');
    }
}
