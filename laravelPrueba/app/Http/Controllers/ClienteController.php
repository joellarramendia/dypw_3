<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
    }
    

    public function crear(Request $request){
        Cliente::create([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'edad'=>$request->input('edad'),
            'ci'=>$request->input('ci'),
            'correo'=>$request->input('correo'),
            'fecha_nac'=>$request->input('fecha_nac'),
            'estado'=>$request->input('estado'),
        ]);

        
        return redirect()->route('clientes.index');

    }

    public function formulario(){
        return view('clientes.formulario');
    }
    
}
