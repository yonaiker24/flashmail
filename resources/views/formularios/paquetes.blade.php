
<script type="text/javascript">
    $(document).ready(function(){
        $('.paquete').hide();
        vista = false;
        $('#paqueteNuevo').click(function(){
            if(vista){
                $('.paquete').hide("slow");
                $('#paqueteNuevo').html('<a href="#" id="paqueteNuevo"> <div class="item active"> <i class="fas fa-fw fa-map-marked-alt"></i> Nuevo Paquete </div> </a>');
                vista = false;
            }else{
                vista = true;
                $('.paquete').show("slow");
                $('#paqueteNuevo').html('<a href="#" id="paqueteNuevo"> <div class="item active"> <i class="fas fa-fw fa-map-marked-alt"></i> Terminar Pedido </div> </a>');
                
            } 
        });
    });
</script>

<script>
    function ocultar(){
        $('.paquete').hide("slow");
        $('#paqueteNuevo').html('<a href="#" id="paqueteNuevo"> <div class="item active"> <i class="fas fa-fw fa-map-marked-alt"></i> Nuevo Paquete </div> </a>');
        vista = false;
        document.getElementById("form").reset();
        $('#registro').prop('disabled', false);
    }

</script>






{!!Form::open(['id' => 'form'])!!}
<div class="alert alert-success alert-dismissible fade show" id="mensaje-success" role="alert" style="display:none;">
        <strong>EN CAMINO!</strong> Orden Registrada con exito(cierre este mensaje).
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="ocultar()">
            <span aria-hidden="true">&times;</span>
        </button>
</div>

<div class="alert alert-danger alert-dismissible fade show" id="mensaje-danger" role="alert" style="display:none;">
        <strong>ups!</strong> Por favor introduzca información valida.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>

<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="row">
        <div class="form-group col-md-6">
            {!!Form::label('nombreDestinatario','Nombre de Destinatario:')!!}
            {!!Form::text('nombreDestinatario',null,['class'=>'form-control','placeholder'=>'Nombres','tabindex'=>'1','id'=>'nombreDestinatario','required'])!!}
        </div>
        <div class="form-group col-md-6">
            {!!Form::label('Apellido de Destinatario:')!!}
            {!!Form::text('apellidoDestinatario',null,['class'=>'form-control','placeholder'=>'Apellidos','tabindex'=>'2','id'=>'apellidoDestinatario','required'])!!}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-8">
                {!!Form::label('Dirección de entrega:')!!}
                <input type="search" id="direccion" placeholder="Busca la dirección" required>

                <script>
                    placeSearch({
                        key: 'E9EKSMkLWxbRBE4NYn9P3GVHAnAmbbjd',
                        container: document.querySelector('#direccion')
                    });
                </script>
        </div>
        <div class="form-check col-md-4">
            <br><br>
            <button type="button" class="btn" onclick="">Utilizar Mapa</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-md-10">
            {!!Form::label('Contenido Paquete:')!!}
            {!!Form::text('contenidoPaquete',null,['class'=>'form-control','placeholder'=>'Contenido...','tabindex'=>'4','id'=>'contenidoPaquete','required'])!!} 
        </div>
        <div class="form-group col-md-2">
            {!!Form::label('Peso:')!!}
            <input type="number" class="form-control" id="peso" placeholder="KG" required>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-5 he">
            <button action="#" id="registro" class="btn btn-primary" >Registrar Orden</button>
                
        </div>
       
    </div>      
    
{!!Form::close()!!}
