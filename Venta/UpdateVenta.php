<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once '../conexion.php';
    $idVenta = $_GET["idVenta"];
    $totalVenta = $_GET["totalVenta"];
    $DetalleVenta_idDetalleVenta = $_GET["DetalleVenta_idDetalleVenta"];
    $Usuario_idUsuario = $_GET["Usuario_idUsuario"];

    $query =
    "UPDATE venta SET 
    totalVenta = '$totalVenta', 
    DetalleVenta_idDetalleVenta = '$DetalleVenta_idDetalleVenta', 
    Usuario_idUsuario = '$Usuario_idUsuario'
    WHERE idVenta = $idVenta";

    $result = $mysql->query($query);

    if ($result == true) {
        echo "Registro editado satisfactoriamente...";
    } else {
        echo "Error al editar registro...";
    }
} else {
    echo "Error desconocido";
}