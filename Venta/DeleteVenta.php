<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idVenta = $_POST["idVenta"];
    $my_query = "DELETE from venta where idVenta = $idVenta";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>