<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $cantidadVendida = $_POST["cantidadVendida"];
    $precioUnitario = $_POST["precioUnitario"];
    $Producto_idProducto = $_POST["Producto_idProducto"];
    $my_query = "insert into detallesventa(cantidadVendida, precioUnitario, Producto_idProducto) 
    values ('".$cantidadVendida."', '".$precioUnitario."', '".$Producto_idProducto."')";
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