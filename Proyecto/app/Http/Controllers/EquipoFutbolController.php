<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EquipoFutbol;
use Illuminate\Support\Facades\Validator;

class EquipoFutbolController extends Controller
{
    public function index()
    {
        //
        $ani=EquipoFutbol::all(); //traiga todo lo que tiene aqui tema_-model
        return $ani;
    }

    public function store(Request $request)
    {

        $validar=Validator::make($request->all(),
        ["nombre"=>"required"]
    );
    if(!$validar->fails()){
        $ani= new EquipoFutbol();
        $ani->nombre=$request->nombre;
        $ani->ciudadOrigen=$request->ciudadOrigen;
        $ani->ligaPertenece=$request->ligaPertenece;
        $ani->apodo=$request->apodo;
        $ani->correo=$request->correo;
        $ani->web=$request->web;
        $ani->telefono=$request->telefono;
        $ani->save();
        return response()->json([
            'mensaje'=>"correctamente guardado"
        ]);
        

    }
    
    }

    public function show($id)
    {
        $ani=EquipoFutbol::where("id",$id)->get();
        return $ani;
    }
}
