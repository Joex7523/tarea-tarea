<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;

class EmpleadoController extends Controller
{
    //

    public function index()
    {
        //
        $emple=Empleado::all(); //traiga todo lo que tiene aqui tema_-model
        return $emple;
    }

    public function store(Request $request)
    {

        $validar=Validator::make($request->all(),
        ["nombre"=>"required"]
    );
    if(!$validar->fails()){
        $emple= new Empleado();
        $emple->nombre=$request->nombre;
        $emple->apellido=$request->apellido;
        $emple->correo=$request->correo;
        $emple->edad=$request->edad;
        
        $emple->save();
        return response()->json([
            'mensaje'=>"correctamente guardado"
        ]);
        
    }
    
    }

    public function show($id)
    {
        $emple=Empleado::where("id",$id)->get();
        return $emple;
    }
}
