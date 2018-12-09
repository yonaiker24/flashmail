@extends('plantilla.plantilla')

@section('seccion')



    <header>
       <div class="container-fluid iniciarSesion position-relative">
        <div class="row">
           <div class="logo col-md-4 offset-md-1">
             <img src="{{asset('Imagenes/logo.png')}}" alt="" height="90">
            </div>
            <div class="col-md-7">
                <!-- INICIO: FORMULARIO DE LOGIN -->
                @include('formularios.login')
                <!-- FIN: ERROR DE LOGIN -->
            </div>
        </div>
       </div>
    </header>

    <section>
     
        <div class="container-fluid registro position-relatistve">
            
            <!-- INICIO: ERROR DE LOGIN -->
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    @include('errores.login')
                </div>
            </div>
            <!-- FIN:ERROR DE LOGIN-->


                <div class="row">
                    <div class="col-md-4 offset-md-7 text-center">                 
                    <h2>Registrate</h2>
                    </div>
                </div>

                <div class="row">
                    <!-- INICIO: ERROR DE REGISTRO -->
                    <div class="col-md-6">
                        @include('errores.registro')
                    </div>
                    <!-- FIN: ERROR DE REGISTRO -->

                    <div class="col-md-6">

                        <!-- INICIO: ALERTA DE REGISTRO EXITOSO-->
                        @include('notificaciones.registro')
                        <!-- FIN: ALERTA DE REGISRO EXITOSO -->

                        <!-- INCIO: FORMULARIO DE REGISTRO-->
                        @include('formularios.registro')
                        <!-- FIN : FORMULARIO DE REGISTRO-->
                        
                        
                    </div>
                    
                            
                </div>

        </div>


    </section>


    <div class="container-fluid">
        
        <div class="row margen">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                    <h1>Integrantes</h1>
                </div>
                <div class="row">
                    
                    <div class="col-md-4">
                            <div class="integrante">
                                <div class="foto">
                                    <img src="{{asset('Imagenes/gabriel.jpeg')}}" >

                                </div>
                                <div class="informacion-equipo">
                                    <h3>Gabriel Ortega</h3>
                                    <span class="post"> Estudiante </span>
                                    <span class="post"> Desarrollador </span>
                                </div>
                                <ul class="social">
                                    <li><a href="" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-instagram"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                    </div>

                    <div class="col-md-4">
                        <div class="integrante">
                            <div class="foto">
                                <img src="{{asset('Imagenes/gabriel.jpeg')}}" >

                            </div>
                            <div class="informacion-equipo">
                                <h3>María Abeñano</h3>
                                <span class="post"> Estudiante </span>
                                <span class="post"> Desarrolladora </span>
                            </div>
                            <ul class="social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="integrante">
                            <div class="foto">
                                <img src="{{asset('Imagenes/gabriel.jpeg')}}" >

                            </div>
                            <div class="informacion-equipo">
                                <h3>Yonaiker Vazquez</h3>
                                <span class="post"> Estudiante </span>
                                <span class="post"> Desarrollador </span>
                            </div>
                            <ul class="social">
                                <li><a href="" class="fa fa-facebook"></a></li>
                                <li><a href="" class="fa fa-instagram"></a></li>
                                <li><a href="" class="fa fa-twitter"></a></li>
                                <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                
            </div>
            
        </div>

        <div class="col-md-6">
            
            <div class="row">
            
                <ul class="text-center col-md-10 offset-md-1">
                    <li><h3>Informacion:</h3></li>
                    <li><h4>Ingeniería en informatica</h4></li>
                    <li><h4>Catedra: Ingeniería de Software</li>
                    <li><h4>Profesor: Carlos Barroeta</h4></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-4">
                <img src="{{asset('Imagenes/logo.png')}}" class="img-responsive">
                </div>
                
            </div>
            <div class="row">
                <img src="{{asset('Imagenes/ucab.png')}}" class="img-responsive">
            </div>
            

            </div>
            
        </div>
           
     
        
    </div>

  