<?php

namespace flashmail\Http\Controllers;

use Illuminate\Http\Request;
use flashmail\Http\Requests;
use flashmail\Http\Requests\RegistroRequest;
use flashmail\Http\Controllers\Controller;
use flashmail\Usuario;
use flashmail\Cliente;
use flashmail\Direccion;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        $usuario = Usuario::create([
            'correo' => $request['correo'],
            'contrasena' => bcrypt($request['contraseña'])
        ]);


        $id = $usuario->id;
        
        
        
        $cliente = Cliente::create([
            'nombre' => $request['nombres'],
            'apellido' => $request['apellidos'],
            'fecha_nacimiento' => $request['fechaNacimiento'],
            'usuario_id' => $id
        ]);

        $id = $cliente->id;

    
        $direccion = Direccion::create([
            'pais' => $request['pais'],
            'estado' => $request['estado'],
            'ciudad' => $request['ciudad'],
            'zona' => $request['direccion'],
            'codigo_postal' => $request['codigoPostal'],
            'cliente_id' => $id
        ]);


        //return "esto es:".$request;
        return redirect('/')->with('mensaje','store');
    }

   
}
