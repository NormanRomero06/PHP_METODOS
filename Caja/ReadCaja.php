<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once '../conexion.php';
    $my_query = "SELECT caja.idTransaccion, caja.fechaTransaccion, caja.tipoTransaccion, caja.montoTransaccion, venta.totalVenta AS 'Total Venta'
    FROM caja
    INNER JOIN venta
    ON caja.Venta_idVenta = venta.idVenta";
    $result = $mysql->query($my_query);
    if ($mysql->affected_rows > 0) {
        $json = "{\"data\":[";
        while ($row = $result->fetch_assoc()) {
            $json = $json . json_encode($row);
            $json = $json . ",";
        }
        $json = substr(trim($json), 0, -1);
        $json = $json . "]}";
    }
    echo $json;
    $result->close();
    $mysql->close();
}