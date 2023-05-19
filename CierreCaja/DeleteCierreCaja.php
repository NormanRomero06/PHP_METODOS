<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCierres = $_POST["idCierres"];
    $my_query = "DELETE from cierrecaja where idCierres = $idCierres";
    $result = $mysql -> query($my_query);

}else{
    echo"Error desconocido";
}
?>