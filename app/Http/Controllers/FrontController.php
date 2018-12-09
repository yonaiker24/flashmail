<?php

namespace flashmail\Http\Controllers;

use Illuminate\Http\Request;

use flashmail\Http\Requests;
use flashmail\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function  __construct(){
        $this->middleware('auth', ['only' => 'principal']);
    }

    public function index()
    {
       return view('index');
    }

    
    
    //puede que aqui mande la sesion
    public function principal(){
        return view('usuario.principal');
    }


}
