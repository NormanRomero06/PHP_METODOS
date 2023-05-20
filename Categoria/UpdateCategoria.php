<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
  $idCategoria = $_GET["idCategoria"];
  $nombre = $_GET["nombre"];
  $imagen = $_GET["imagen"];

  $my_query = "UPDATE categoria SET nombre = '$nombre', imagen = '$imagen' where idCategoria = $idCategoria";
  $result = $mysql->query($my_query);
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}