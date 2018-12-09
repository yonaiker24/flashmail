@extends('plantilla.plantilla')

@section('seccion')



    
    <?php
        $clientes = \flashmail\Cliente::All();
            foreach($clientes as $cliente){
                if($cliente->usuario_id ==  Auth::user()->id){
                    break;
                }
        }

    ?>

     <!-- INCIO: RUTAS UTILIZADAS PARA EL MAPA-->
    @include('rutas.mapa')
     <!-- FIN: RUTAS UTILZIADAS PARA EL MAPA-->


    <header class="position-relative">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar col-md-12">
                    <div class="container-fluid">
                            <div class="logo col-md-2">
                                    <img src="{{asset('Imagenes/logo.png')}}" alt="" height="50">
                                    </div>
                            <div class="col-md-2 offset-md-8 text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-fw fa-user-circle"></i> {{$cliente->nombre." ".$cliente->apellido}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/logout">Cerrar Sesión</a>
                                    </div>
                                </div>
                               
                            </div>
                    </div>
                        
                    
                </nav>
            </div>
        </div>
    </header>

    


    <section class="menuVertical">
      <div class="container-fluid">
        <div class="row">

            <div class="left prueba1 position-relative text-center">
                <a href="#">
                    <div class="item">
                            <i class="fas fa-fw fa-bars"></i>Menú
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <i class="fas fa-fw fa-user-circle"></i> Mi perfil
                    </div>
                </a>
                <a id="paqueteNuevo">
                    <div class="item active">
                        <i class="fas fa-fw fa-map-marked-alt"></i> Nuevo Paquete
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <i class="fas fa-fw fa-columns"></i> Mis paquetes
                    </div>
                </a>
                <a href="#">
                    <div class="item">
                        <i class="fas fa-fw fa-trash"></i> Eliminar Paquete
                    </div>
                </a>
            </div>

            
            
             

            <div class="paquete position-absolute">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- INCIO: FORMULARIO DE REGISTRO-->
                            @include('formularios.paquetes')
                             <!-- FIN : FORMULARIO DE REGISTRO-->
                            
                        </div>
                    </div>   
                </div>
            </div>
            

            <!-- INCIO: MOSTRAR MAPA-->
               @include('mapa.mostrar')
            <!-- FIN: MOSTRAR MAPA-->
        </div>
      </div>
    </section>

@include('rutas.script')


  