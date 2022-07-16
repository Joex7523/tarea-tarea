<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;

class EmpresaController extends Controller
{
    public function index()
    {
        //
        $emple=Empresa::all(); //traiga todo lo que tiene aqui tema_-model
        return $emple;
    }

    public function store(Request $request)
    {

        $validar=Validator::make($request->all(),
        ["nombre"=>"required"]
    );
    if(!$validar->fails()){
        $emp= new Empresa();
        $emp->nombre=$request->nombre;
        $emp->nit=$request->nit;
        $emp->direccion=$request->direccion;
        $emp->descripcion=$request->descripcion;
        
        $emp->save();
        return response()->json([
            'mensaje'=>"correctamente guardado"
        ]);
        
    }
    
    }

    public function show($id)
    {
        $emp=Empresa::where("id",$id)->get();
        return $emp;
    }
}
