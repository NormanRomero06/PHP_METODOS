<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $idTransaccion = $_GET["idTransaccion"];
    $my_query = "DELETE from caja where idTransaccion = $idTransaccion";
    $result = $mysql->query($my_query);

    if ($result == true) {
        echo "Registro eliminado satisfactoriamente...";
    } else {
        echo "Error al eliminar registro...";
    }

} else {
    echo "Error desconocido";
}