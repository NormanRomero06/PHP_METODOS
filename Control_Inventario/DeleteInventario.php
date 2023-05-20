<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idInventario = $_GET["idInventario"];
    $my_query = "DELETE from inventario where idInventario = $idInventario";
    $result = $mysql -> query($my_query);
    echo "Registro eliminado";
}else{
    echo"Error desconocido";
}
?>