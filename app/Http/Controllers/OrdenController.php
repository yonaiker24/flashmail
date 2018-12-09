<?php

namespace flashmail\Http\Controllers;

use Illuminate\Http\Request;

use flashmail\Http\Requests;
use flashmail\Http\Controllers\Controller;
use flashmail\Paquete;
use flashmail\Orden;

class OrdenController extends Controller
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
    public function store(Request $request)
    {
       if($request->ajax()){
         
            $orden = Orden::create([
                'nombre_destinatario' => $request->{'nombreDestinario'},
                'apellido_destinatario' => $request->{'apellidoDestinatario'},
                'direccion' => $request->{'direccion'},
            ]);

            $id = $orden->id;

            $paquete = Paquete::create([
                'contenido' => $request->{'contenido'},
                'peso' => $request->{'peso'},
                'orden_id' => $id
            ]);

            return response()->json([
                "mensaje" => "creado"
            ]);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
