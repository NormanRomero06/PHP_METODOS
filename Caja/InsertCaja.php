<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $fechaTransaccion = $_POST["fechaTransaccion"];
    $tipoTransaccion = $_POST["tipoTransaccion"];
    $montoTransaccion = $_POST["montoTransaccion"];
    $Venta_idVenta = $_POST["Venta_idVenta"];
    $my_query = "insert into caja(fechaTransaccion, tipoTransaccion, montoTransaccion, Venta_idVenta) 
    values('" . $fechaTransaccion . "', '" . $tipoTransaccion . "', '" . $montoTransaccion . "', '" . $Venta_idVenta . "')";
    $result = $mysql->query($my_query);
    if ($result == true) {
        echo "Registro guardado satisfactoriamente...";
    } else {
        echo "Error al guardar registro...";
    }
} else {
    echo "Error desconocido";
}