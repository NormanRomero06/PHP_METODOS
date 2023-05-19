<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCategoria = $_POST["idPagos"];
    $my_query = "DELETE from egresos where idPagos = $idPagos";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>