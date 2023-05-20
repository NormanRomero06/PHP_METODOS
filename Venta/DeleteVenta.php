<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idVenta = $_GET["idVenta"];
    $my_query = "DELETE from venta where idVenta = $idVenta";
    $result = $mysql -> query($my_query);
    if ($result == true) {
        echo "Venta eliminado satisfactoriamente...";
    } else {
        echo "Error al eliminar Venta...";
    }
}else{
    echo"Error desconocido";
}
?>

