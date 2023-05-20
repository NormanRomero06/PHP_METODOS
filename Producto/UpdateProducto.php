<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idProducto = $_GET["idProducto"];
    $nombre = $_GET["nombre"];
    $precio = $_GET["precio"];
    $descripcion =$_GET["descripcion"];
    $cantidad = $_GET["cantidad"];
    $cantidadMinima = $_GET["cantidadMinima"];
    $imagen = $_GET["imagen"];
    $Categoria_idCategoria  = $_GET["Categoria_idCategoria"];
    
    $my_query = "UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', cantidad = '$cantidad', cantidadMinima = '$cantidadMinima', imagen = '$imagen'
    , Categoria_idCategoria = '$Categoria_idCategoria' where idProducto = $idProducto";
    $result = $mysql->query($my_query);
      if($result == true){
          echo "Registro editado satisfactoriamente...";
      }else{
          echo"Error al editar registro...";
      }
  }else{
      echo"Error desconocido";
  }