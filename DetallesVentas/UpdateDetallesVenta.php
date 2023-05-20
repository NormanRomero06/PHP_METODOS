<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../conexion.php';
    $idDetalleVenta = $_GET["idDetalleVenta"];
    $cantidadVendida = $_GET["cantidadVendida"];
    $precioUnitario = $_GET["precioUnitario"];
    $Producto_idProducto = $_GET["Producto_idProducto"];

    $query =
    "UPDATE detallesventa SET 
    cantidadVendida = '$cantidadVendida', 
    precioUnitario = '$precioUnitario', 
    Producto_idProducto = '$Producto_idProducto'
    WHERE idDetalleVenta = $idDetalleVenta";

    $result = $mysql->query($query);

    if ($result == true) {
        echo "Registro editado satisfactoriamente...";
    } else {
        echo "Error al editar registro...";
    }
} else {
    echo "Error desconocido";
}