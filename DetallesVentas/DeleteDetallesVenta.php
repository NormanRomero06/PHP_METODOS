<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idDetalleVenta = $_GET["idDetalleVenta"];
    $my_query = "DELETE from detallesventa where idDetalleVenta = $idDetalleVenta";
    $result = $mysql -> query($my_query);
    if ($result == true) {
        echo "Detalle de la venta eliminado satisfactoriamente...";
    } else {
        echo "Error al eliminar detalle...";
    }
}else{
    echo"Error desconocido";
}
?>