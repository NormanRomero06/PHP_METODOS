<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCierres = $_GET["idCierres"];
    $my_query = "DELETE from cierrecaja where idCierres = $idCierres";
    $result = $mysql -> query($my_query);

    echo "Registro eliminado correctamente";

}else{
    echo"Error desconocido";
}
?>