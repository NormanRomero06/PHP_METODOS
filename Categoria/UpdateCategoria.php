<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idCategoria = $_POST["idCategoria"];
    $nombre = $_POST["nombre"];
    $imagen = $_POST["imagen"];
    
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