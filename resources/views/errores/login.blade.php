@if(Session::has('message-error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error al entrar!</strong> Datos vacios o invalidos.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{Session::get('message-error')}}
    </div>
@endif