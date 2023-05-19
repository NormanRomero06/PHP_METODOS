<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idProducto = $_POST["idProducto"];
    $nombre = $_POST["nombres"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $cantidadMinima = $_POST["cantidadMinima"];
    $imagen = $_POST["imagen"];
    $Categoria_idCategoria  = $_POST["Categoria_idCategoria "];
    
    $query =
    "UPDATE producto SET nombre = ?, precio = ?, descripcion = ?, cantidad = ?, cantidadMinima = ?, imagen = ?, idCategoria = ? WHERE idProducto = ?";

  $result = $mysql->execute_query($query, [
    $nombre,
    $precio,
    $descripcion,
    $cantidad,
    $cantidadMinima,
    $imagen,
    $Categoria_idCategoria,
    $idProducto,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}