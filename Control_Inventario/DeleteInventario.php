<?php
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    require_once '../conexion.php';
    $idInventario = $_GET["idInventario"];
    $my_query = "DELETE from inventario where idInventario = $idInventario";
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