<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idDetalleVenta = $_GET["idDetalleVenta"];
    $my_query = "DELETE from detallesventa where idDetalleVenta = $idDetalleVenta";
    $result = $mysql -> query($my_query);
    echo "Registro eliminado";
}else{
    echo"Error desconocido";
}
?>