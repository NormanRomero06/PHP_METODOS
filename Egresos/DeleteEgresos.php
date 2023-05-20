<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idPagos = $_GET["idPagos"];
    $my_query = "DELETE from egresos where idPagos = $idPagos";
    $result = $mysql -> query($my_query);

    if($result == true){
        echo "Egreso eliminado satisfactoriamente...";
    }else{
        echo "Error al eliminar egreso...";
    }

}else{
    echo"Error desconocido";
}
?>