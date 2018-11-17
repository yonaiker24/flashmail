<?php
 // $servidor = "ec2-54-235-193-0.compute-1.amazonaws.com"; //Aqui va el servidor que utilizaremos
  //$usuario = "yzlgbqotsrcikb";  // aqui va nuestro usuario de la base de datos
  //$contraseña = "928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b";   // contrasela del usuario en caso de tenerla
  //$BD = "dbrpcostlumanv";  // nombre de la base de datos
   $sql;    
   $conn_string = "host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=dbrpcostlumanv user=yzlgbqotsrcikb password=928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b options='--client_encoding=UTF8'";       
           
   $conexion = pg_connect($conn_string);
                      
   if (!$conexion) {
    echo "Error: No se pudo conectar a postgresql." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
   }else{
    echo "conecto";
   }
    

   // echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    //echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

    
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

    $id = '';

    //echo $nombres.$apellidos.$correo.$fechaNacimiento.$contraseña.$direccion;


   
    $usuario = "INSERT INTO usuario(id_usuario, correo, contrasena) VALUES ('$id', '$correo', '$contraseña')";
    $ejecutar = pg_query("SELECT * FROM usuario WHERE id_usuario=$usuario");

    //echo "<br>";
    if($ejecutar){
      //  echo "datos guardados Correctamente USUARIO";
    }else {
      echo "Error: " . $usuario . "<br>" . mysqli_error($conexion);
    }


     
    $idUsuario = mysqli_insert_id($conexion); //aqui retomo el id del ultimo Usuario creado en la BD
    
    $cliente="INSERT INTO cliente(nombre, apellido, fecha_nacimiento, id ,id_usuario) VALUES('$nombres', '$apellidos', '$fechaNacimiento', '$idUsuario','$idUsuario')";
    $ejecutar = mysqli_query($conexion,$cliente);
    
    
    
    //echo "<br>";
    //echo "este es el id: ".$idUsuario;

    //echo "<br>";
    if($ejecutar){
      //  echo "datos guardados Correctamente CLIENTE";
    }else {
      echo "Error: " . $cliente . "<br>" . mysqli_error($conexion);
    }

    $idCliente = mysqli_insert_id($conexion);//aqui retomo el id del ultimo cliente creado en la 
    $direccion ="INSERT INTO direccion(id_direccion, id_cliente, pais, estado, ciudad, codigo_postal, zona, zona_2) VALUES('$id', '$idCliente', '$pais', '$estado', '$ciudad', '$codigoPostal', '$direccion', '$direccion2')";
    $ejecutar = mysqli_query($conexion,$direccion);

    //echo "<br>";
    //echo "este es el id: ".$idCliente;

   // echo "<br>";
    if($ejecutar){
    //   echo "datos guardados Correctamente DIRECCION";
      echo "<script> alert('Registrado Satisfactoriamente')</script>";
      echo '<script> window.location="../index.php"; </script>';

    }else {
      echo "Error: " . $direccion . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
                      
?>