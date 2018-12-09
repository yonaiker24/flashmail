<?php $mensaje = Session::get('mensaje')?>

    @if($mensaje == 'store')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Bienvenido!</strong> Usuario Registrado con exito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif