<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Animal;
use Illuminate\Support\Facades\Validator;

class AnimalController extends Controller
{
    //

    public function index()
    {
        //
        $ani=Animal::all(); //traiga todo lo que tiene aqui tema_-model
        return $ani;
    }

    public function store(Request $request)
    {

        $validar=Validator::make($request->all(),
        ["nombre"=>"required"]
    );
    if(!$validar->fails()){
        $ani= new Animal();
        $ani->nombre=$request->nombre;
        $ani->tipo=$request->tipo;
        $ani->color=$request->color;
        $ani->especie=$request->especie;
        $ani->edad=$request->edad;
        $ani->save();
        return response()->json([
            'mensaje'=>"correctamente guardado"
        ]);
        
    }
    
    }

    public function show($id)
    {
        $ani=Animal::where("id",$id)->get();
        return $ani;
    }
}
