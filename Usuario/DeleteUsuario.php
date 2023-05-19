<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idUsuario = $_POST["idUsuario"];
    $my_query = "DELETE from usuario where idCUsuario = $idUsuario";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>