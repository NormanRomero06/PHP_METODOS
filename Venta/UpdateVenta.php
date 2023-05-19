<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idVenta = $_POST["idVenta"];
    $totalVenta = $_POST["totalVenta"];
    $DetalleVenta_idDetalleVenta = $_POST["DetalleVenta_idDetalleVenta"];
    $Usuario_idUsuario = $_POST["Usuario_idUsuario"];
    
    $query =
    "UPDATE venta SET totalVenta = ?, DetalleVenta_idDetalleVenta = ?, Usuario_idUsuario = ? WHERE idVenta = ?";

  $result = $mysql->execute_query($query, [
    $totalVenta,
    $DetalleVenta_idDetalleVenta,
    $Usuario_idUsuario,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}