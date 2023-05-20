<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idProducto = $_GET["idProducto"];
    $my_query = "DELETE from producto where idProducto = $idProducto";
    $result = $mysql -> query($my_query);

    if ($result == true) {
        echo "Producto eliminado satisfactoriamente...";
    } else {
        echo "Error al eliminar Producto...";
    }

}else{
    echo"Error desconocido";
}
?>