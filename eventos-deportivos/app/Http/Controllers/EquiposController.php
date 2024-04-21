<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function index(){

        //Consultar datos de la base de datos y mandar en el compact
        // return view('equipos.show',compact(''));
        return view('equipos.show');
    }


    public function edit(Request $request){


        return view('equipos.edit');
    }
}
