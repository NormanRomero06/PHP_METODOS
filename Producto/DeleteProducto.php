<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $idCategoria = $_POST["idProducto"];
    $my_query = "DELETE from producto where idProducto = $idProducto";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>