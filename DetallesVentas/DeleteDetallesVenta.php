<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idDetalleVenta = $_POST["idDetalleVenta"];
    $my_query = "DELETE from detallesventa where idDetalleVenta = $idDetalleVenta";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>