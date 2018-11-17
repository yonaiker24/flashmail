<?php
  $conn_string = "host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=dbrpcostlumanv user=yzlgbqotsrcikb password=928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b options='--client_encoding=UTF8'";       
           
   $conexion = pg_connect($conn_string);
                      
   if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . pg_last_error();
    exit;
   }else{
    echo "conecto";
   }
    
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['email'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $contraseña = $_POST['contraseña'];
    $direccion = $_POST['direccion'];
    $direccion2 = $_POST['direccion2'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $codigoPostal = $_POST['codigoPostal'];

    // ----------------CREAR USUARIO--------------------
    $usuario = "INSERT INTO usuario(correo, contrasena) VALUES('$correo', '$contraseña') RETURNING id";
    $ejecutar = pg_query($usuario); 
    if(!$ejecutar){
      echo "<br>";
      echo "Error: " .  pg_last_error();
    }

    //--------------CRERAR CLIENTE----------------------    
    $row = pg_fetch_array($ejecutar);
    echo " <br> Lo que muestra row" . $row;
    $idUsuario = $row[0]; //buscando el id del usuario para agregarselo a la tabla cliente 
    $cliente="INSERT INTO cliente(nombre, apellido, fecha_nacimiento,id_usuario) VALUES('$nombres', '$apellidos', '$fechaNacimiento', '$idUsuario')";
    $ejecutar = pg_query($cliente);
    if(!$ejecutar){
      echo "<br>";
      echo "Error: " . pg_last_error();
    }


    pg_close($conexion);
                      
?>