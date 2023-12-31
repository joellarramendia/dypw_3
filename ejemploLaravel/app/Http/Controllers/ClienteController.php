<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController
extends Controller
{

    public function index()
    {
        //Obtener datos por ORM Eloquent    
        $clientes = Cliente::All();
        //Obtener datos por el metodo get
        //$clientes=DB::table('clientes')
        //->get();
        //$clientes=DB::insert('select * from clientes where estado= "Activo"');


        return view('clientes.index', compact('clientes'));
    }


    public function crear(Request $request)
    {
        Cliente::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'edad' => $request->input('edad'),
            'ci' => $request->input('ci'),
            'correo' => $request->input('correo'),
            'fecha_nac' => $request->input('fecha_nac'),
            'estado' => $request->input('estado'),
        ]);
        return redirect()->route('index')->with('success', 'Se creo correctamente!');
    }

    public function formulario()
    {
        return view('clientes.formulario');
    }
    public function eliminar($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect()->route('index');
    }
    public function editar($id)
    {
        $clientes = Cliente::find($id);
        return view('clientes.editar', compact('clientes'));
    }
    public function actualizar(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->nombre = $request->input('nombre');
        $clientes->apellido = $request->input('apellido');
        $clientes->edad = $request->input('edad');
        $clientes->ci = $request->input('ci');
        $clientes->correo = $request->input('correo');
        $clientes->fecha_nac = $request->input('fecha_nac');
        $clientes->estado = $request->input('estado');
        $clientes->save();
        return redirect()->route('index');
    }

    public function ver($id)
    {
        $clientes = Cliente::find($id);
        return view('clientes.ver', compact('clientes'));
    }

    /*public function buscar(Request $request)
    {
        $buscar = $request->input('buscar');
        $clientes = Cliente::where('nombre', 'like', '%' . $buscar . '%')->get();
        return view('clientes.index', compact('buscar', 'clientes'));
    }*/

    /*public function buscar(Request $request)
    {
        $buscar = $request->input('buscar');
        $mensaje = "";
        //validar el campo de busqueda
        if(empty($buscar)){
            $mensaje = "No se ha especificado un termino de busqueda";
            $clientes = []; //si el campo esta vacion devuelve un arreglo vacio
        }else{
            $clientes = Cliente::where('nombre', 'like', '%' . $buscar . '%')->get();
        }
        return view('clientes.index', compact('buscar', 'clientes', 'mensaje'));
    }*/

    public function buscar(Request $request){
    $buscar = $request->input('buscar');
    $mensaje = "";

    //validar el campo de búsqueda
    if (empty($buscar)) {
        $mensaje = "No se ha especificado un término de búsqueda";
        $clientes = []; // si el campo está vacío, devuelve un arreglo vacío
    } else {
        // buscar en la base de datos
        $clientes = Cliente::where('nombre', 'like', '%' . $buscar . '%')->get();
        
        // si no hay resultados, mostrar un mensaje de error
        if ($clientes->isEmpty()) {
            $mensaje = "No hay coincidencias";
        }
    }

    return view('clientes.index', compact('buscar', 'clientes', 'mensaje'));
}

}
