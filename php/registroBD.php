<?php
echo "qq";
  $connection_string= "host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=dbrpcostlumanv user=yzlgbqotsrcikb password=928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b, connection_timeout=5";                 
   $conexion = pg_connect($connection_string) or die("error ". pg_last_error());
   $stat = pg_connection_status($conexion);
                      
  if (!$conexion) {
      echo "Estado de la conexión ok";
  } else {
      echo "No se ha podido conectar";
  }    

                      
?>