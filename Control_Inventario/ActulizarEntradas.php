<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once '../conexion.php';
    $idProducto = $_POST['idProducto'];
    $cantidad = $_POST['cantidad'];
    $my_query = "INSERT INTO controlinventario (idProducto, fecha, tipo, cantidad)
    VALUES ('".$idProducto."', NOW(), 'Entrada', '".$cantidad."')";
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

