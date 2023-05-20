<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idVenta = $_GET["idVenta"];
    $my_query = "DELETE from venta where idVenta = $idVenta";
    $result = $mysql -> query($my_query);
    echo "Registro Eliminado";

}else{
    echo"Error desconocido";
}
?>

