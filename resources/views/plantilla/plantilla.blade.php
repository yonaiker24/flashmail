
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FlashMail</title>

    {!!Html::style('css/reset.css')!!}
    {!!Html::style('css/inicioSesion.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Poppins')!!}
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')!!}
    {!!Html::script('js/ocultar.js')!!}
    {!!Html::script('js/prueba.js')!!}

</head>
<body>
    









    @yield('seccion');




    <footer>
        <div class="container-fluid">
           <div class="row">
               <div class="col-md-8 offset-md-2 text-center">
                <h5>Proyecto de Semestre</h5>
               </div>
                 
            </div>
        </div>

    </footer>

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/script.js')!!}
   
</body>
</html>