<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $totalVenta = $_POST["totalVenta"];
    $DetalleVenta_idDetalleVenta = $_POST["DetalleVenta_idDetalleVenta"];
    $Usuario_idUsuario = $_POST["Usuario_idUsuario"];
    $my_query = "insert into venta(totalVenta, DetalleVenta_idDetalleVenta, Usuario_idUsuario ) 
    values('".$totalVenta."', '".$DetalleVenta_idDetalleVenta."', '".$Usuario_idUsuario."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>