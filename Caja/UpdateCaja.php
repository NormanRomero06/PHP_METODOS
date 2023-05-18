<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $idTransaccion = $_POST["idTransaccion"];
    $fechaTransaccion = $_POST["fechaTransaccion"];
    $tipoTransaccion = $_POST["tipoTransaccion"];
    $montoTransaccion = $_POST["montoTransaccion"];
    $Venta_idVenta = $_POST["Venta_idVenta"];

    $query =
        "UPDATE caja SET idTransaccion = ?, fechaTransaccion = ?, tipoTransaccion = ?, montoTransaccion = ?, Venta_idVenta = ? WHERE idTransaccion = ?";

    $result = $mysql->execute_query($query, [
        $idTransaccion,
        $fechaTransaccion,
        $tipoTransaccion,
        $montoTransaccion,
        $Venta_idVenta,
        $idTransaccion,
    ]);

    if ($result == true) {
        echo "Registro editado satisfactoriamente...";
    } else {
        echo "Error al editar registro...";
    }
} else {
    echo "Error desconocido";
}