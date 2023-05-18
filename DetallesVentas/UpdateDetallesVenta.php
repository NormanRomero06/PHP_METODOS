<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idDetalleVenta = $_POST["idDetalleVenta"];
    $cantidadVendida = $_POST["cantidadVendida"];
    $precioUnitario = $_POST["precioUnitario"];
    $Producto_idProducto = $_POST["Producto_idProducto"];

    $query =
    "UPDATE detallesventa SET idDetalleVenta = ?, cantidadVendida = ?, precioUnitario = ?, Producto_idProducto = ? WHERE idDetalleVenta = ?";

  $result = $mysql->execute_query($query, [
    $cantidadVendida,
    $precioUnitario,
    $Producto_idProducto,
    $idDetalleVenta,
  ]);
    
    if($result == true){
        echo "Registro editado satisfactoriamente...";
    }else{
        echo"Error al editar registro...";
    }
}else{
    echo"Error desconocido";
}