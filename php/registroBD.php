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

    $id = '';

    $usuario = "INSERT INTO usuario(id_usuario, correo, contrasena) VALUES('$id', '$correo', '$contraseña')";
    $ejecutar = pg_query($usuario); 
    if($ejecutar){
      //  echo "datos guardados Correctamente USUARIO";
    }else {
      echo "Error: " . $usuario . "<br>" . pg_last_error();
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
    $direccion ="INSERT INTO direccion(id, id_cliente, pais, estado, ciudad, codigo_postal, zona, zona_2) VALUES('$id', '$idCliente', '$pais', '$estado', '$ciudad', '$codigoPostal', '$direccion', '$direccion2')";
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