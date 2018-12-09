$('#registro').click(function(){
    var nombreDestinario = $('#nombreDestinatario').val();
    var apellidoDestinatario = $('#apellidoDestinatario').val();
    var direccion = $('#direccion').val();
    var contenido = $('#contenidoPaquete').val();
    var peso = $('#peso').val();

    var route = "http://localhost:8000/principal";

    var token = $('#token').val();
    


    if(nombreDestinario == '' || apellidoDestinatario == '' || direccion == '' || contenido == '' || peso == '' ){
        $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            success:function(){
                $('#mensaje-danger').fadeIn();
            }
        });
    }else{
        $.ajax({
            url: route,
            headers:{'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:{
                nombreDestinario: nombreDestinario,
                apellidoDestinatario: apellidoDestinatario,
                direccion: direccion,
                contenido: contenido,
                peso: peso
            },
    
    
            success:function(){
                $('#mensaje-success').fadeIn();
            },
    
            beforeSend: function () {
                $('#registro').attr("disabled","disabled");
                
            }
        });
    }

     
});