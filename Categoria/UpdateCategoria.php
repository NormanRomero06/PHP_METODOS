<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
  $idCategoria = $_GET["idCategoria"];
  $nombre = $_GET["nombre"];
  $imagen = $_GET["imagen"];

  $my_query = "UPDATE categoria SET nombres = '$nombres', apellidos = '$apellidos', fechaNac = '$fechaNac', titulo = '$titulo', email = '$email', facultad = '$facultad' where idC = $idC";
  $result = $mysql->query($my_query);

    $query =
    "UPDATE categoria SET nombre = ?, imagen = ? WHERE idCategoria = ?";

  $result = $mysql->execute_query($query, [
    $nombre,
    $imagen,
    $idCategoria,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}