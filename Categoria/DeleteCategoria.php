<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCategoria = $_POST["idCategoria"];
    $my_query = "DELETE from categoria where idCategoria = $idCategoria";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>