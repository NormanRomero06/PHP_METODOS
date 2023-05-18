<?php
  $mysql = new mysqli("localhost", "root", "", "FavaBD");
    if($mysql->connect_error){
        echo "error: ";
        die("Error de conexion");
    }
    else {
      echo "Conexion exitosa";
    }
?>