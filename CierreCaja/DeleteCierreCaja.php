<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idCierres = $_GET["idCierres"];
    $my_query = "DELETE from cierrecaja where idCierres = $idCierres";
    $result = $mysql -> query($my_query);

    if ($result == true) {
        echo "Registro eliminado satisfactoriamente...";
    } else {
        echo "Error al eliminar registro...";
    }

}else{
    echo"Error desconocido";
}
?>